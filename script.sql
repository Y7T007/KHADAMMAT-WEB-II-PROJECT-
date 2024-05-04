create table authentication
(
    auth_id     varchar(255) not null
        primary key,
    auth_method varchar(255) null
);

create table clients
(
    id              int auto_increment
        primary key,
    name            varchar(255)                          not null,
    email           varchar(255)                          not null,
    password        varchar(255)                          not null,
    address         varchar(255)                          null,
    phone_number    varchar(255)                          null,
    profile_picture varchar(255)                          null,
    created_at      timestamp default current_timestamp() null,
    updated_at      timestamp default current_timestamp() null on update current_timestamp(),
    ville           varchar(50)                           null,
    date_naissance  date      default current_timestamp() null,
    genre           varchar(10)                           null,
    nb_chambres     int                                   null,
    nb_bain         int                                   null,
    television      tinyint(1)                            null,
    refrigirateur   tinyint(1)                            null,
    machine_a_laver tinyint(1)                            null,
    autres          varchar(255)                          null,
    Garage          tinyint(1)                            null,
    jardin          tinyint(1)                            null,
    superficie      int                                   null
);

create table failed_jobs
(
    id         bigint unsigned auto_increment
        primary key,
    uuid       varchar(255)                          not null,
    connection text                                  not null,
    queue      text                                  not null,
    payload    longtext                              not null,
    exception  longtext                              not null,
    failed_at  timestamp default current_timestamp() null,
    constraint failed_jobs_uuid_unique
        unique (uuid)
)
    collate = utf8mb4_unicode_ci;

create table password_resets
(
    email      varchar(255) not null
        primary key,
    token      varchar(255) not null,
    created_at timestamp    null
)
    collate = utf8mb4_unicode_ci;

create table personal_access_tokens
(
    id             bigint unsigned auto_increment
        primary key,
    tokenable_type varchar(255)    not null,
    tokenable_id   bigint unsigned not null,
    name           varchar(255)    not null,
    token          varchar(64)     not null,
    abilities      text            null,
    last_used_at   timestamp       null,
    expires_at     timestamp       null,
    created_at     timestamp       null,
    updated_at     timestamp       null,
    constraint personal_access_tokens_token_unique
        unique (token)
)
    collate = utf8mb4_unicode_ci;

create index personal_access_tokens_tokenable_type_tokenable_id_index
    on personal_access_tokens (tokenable_type, tokenable_id);

create table professional_areas
(
    area_id varchar(255) not null
        primary key,
    domain  varchar(255) null
);

create table business_partners
(
    partner_id          varchar(255)    not null
        primary key,
    company_name        varchar(255)    null,
    location_city       varchar(255)    null,
    years_of_experience int             null,
    availability_status varchar(255)    null,
    rate                varchar(255)    null,
    expertise_areas     varchar(255)    null,
    user_id             bigint unsigned not null,
    constraint fk_expertise_areas
        foreign key (expertise_areas) references professional_areas (area_id)
);

create index fk_user_id
    on business_partners (user_id);

create table partner_expertise
(
    partner_id varchar(255) not null,
    area_id    varchar(255) not null,
    primary key (partner_id, area_id),
    constraint fk_partner_expertise_area
        foreign key (area_id) references professional_areas (area_id),
    constraint fk_partner_expertise_partner
        foreign key (partner_id) references business_partners (partner_id)
);

create table service_categories
(
    category_id   varchar(255) not null
        primary key,
    category_name varchar(255) null
);

create table services_offered
(
    service_id          varchar(255)                          not null
        primary key,
    service_description varchar(255)                          null,
    service_date        timestamp default current_timestamp() not null on update current_timestamp(),
    service_duration    int                                   null,
    category_id         varchar(255)                          null
);

create table customer_records
(
    record_id          varchar(255) not null
        primary key,
    full_name          varchar(255) null,
    home_address       varchar(255) null,
    email_address      varchar(255) null,
    requested_services varchar(255) null,
    constraint fk_requested_services
        foreign key (requested_services) references services_offered (service_id)
);

create table feedback_comments
(
    comment_id      varchar(255) not null
        primary key,
    comment_content varchar(255) null,
    rating_score    int          null,
    service_id      varchar(255) null,
    customer_id     varchar(255) null,
    partner_id      varchar(255) null,
    constraint fk_customers
        foreign key (customer_id) references customer_records (record_id),
    constraint fk_partners
        foreign key (partner_id) references business_partners (partner_id),
    constraint fk_services
        foreign key (service_id) references services_offered (service_id)
);

create table sessions
(
    id            varchar(255)    not null
        primary key,
    user_id       bigint unsigned null,
    ip_address    varchar(45)     null,
    user_agent    text            null,
    payload       longtext        not null,
    last_activity int             not null
)
    collate = utf8mb4_unicode_ci;

create index sessions_last_activity_index
    on sessions (last_activity);

create index sessions_user_id_index
    on sessions (user_id);

create table system_agents
(
    agent_id          varchar(255) not null
        primary key,
    agent_role        varchar(255) null,
    customer_requests varchar(255) null,
    partner_responses varchar(255) null,
    constraint fk_customer_requests
        foreign key (customer_requests) references customer_records (record_id),
    constraint fk_partner_responses
        foreign key (partner_responses) references business_partners (partner_id)
);

create table users
(
    id                 bigint unsigned auto_increment
        primary key,
    name               varchar(255)    not null,
    email              varchar(255)    not null,
    email_verified_at  timestamp       null,
    password           varchar(255)    not null,
    remember_token     varchar(100)    null,
    current_team_id    bigint unsigned null,
    profile_photo_path varchar(2048)   null,
    created_at         timestamp       null,
    updated_at         timestamp       null,
    type               varchar(50)     null,
    constraint users_email_unique
        unique (email)
)
    collate = utf8mb4_unicode_ci;

create table services
(
    id           bigint unsigned auto_increment
        primary key,
    partenaireid bigint unsigned                       null,
    nom          varchar(255)                          null,
    description  text                                  null,
    image        varchar(255)                          null,
    categorie    varchar(255)                          null,
    phone        varchar(20)                           null,
    prix         decimal(10, 2)                        null,
    created_at   timestamp default current_timestamp() not null,
    updated_at   timestamp default current_timestamp() not null on update current_timestamp(),
    constraint fk_services_partenaire
        foreign key (partenaireid) references users (id)
);

create table demandes
(
    id           bigint unsigned auto_increment
        primary key,
    idclient     bigint unsigned                       null,
    partenaireid bigint unsigned                       null,
    idservice    bigint unsigned                       null,
    duree        int                                   null,
    date         date                                  null,
    statut       varchar(255)                          null,
    created_at   timestamp default current_timestamp() not null,
    updated_at   timestamp default current_timestamp() not null on update current_timestamp(),
    constraint fk_demandes_client
        foreign key (idclient) references users (id),
    constraint fk_demandes_partenaire
        foreign key (partenaireid) references users (id),
    constraint fk_demandes_service
        foreign key (idservice) references services (id)
);

create table comments
(
    id         bigint unsigned auto_increment
        primary key,
    Userid     bigint unsigned                       null,
    content    text                                  null,
    Note       int                                   null,
    Demandeid  bigint unsigned                       null,
    created_at timestamp default current_timestamp() not null,
    updated_at timestamp default current_timestamp() not null on update current_timestamp(),
    constraint fk_comments_demande
        foreign key (Demandeid) references demandes (id),
    constraint fk_comments_user
        foreign key (Userid) references users (id)
);


