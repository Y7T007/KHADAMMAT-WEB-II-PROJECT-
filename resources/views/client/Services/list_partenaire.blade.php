<style>
    .m-portlet {
        margin-bottom: 2.2rem
    }

    .m-portlet .m-portlet__head {
        display: table;
        padding: 0;
        width: 100%;
        padding: 0 2.2rem;
        height: 5.1rem
    }

    .m-portlet .m-portlet__head .m-portlet__head-caption {
        display: table-cell;
        vertical-align: middle;
        text-align: left
    }

    .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title {
        display: table;
        table-layout: fixed;
        height: 100%
    }

    .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-icon {
        display: table-cell;
        vertical-align: middle;
        line-height: 0;
        padding: 0 13px 0 0
    }

    .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-icon [class*=" la-"],
    .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-icon [class^=la-] {
        font-size: 1.6rem
    }

    .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-icon [class*=" fa-"],
    .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-icon [class^=fa-] {
        font-size: 1.4rem
    }

    .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-icon [class*=" flaticon-"],
    .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-icon [class^=flaticon-] {
        font-size: 1.8rem
    }

    .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-icon i {
        vertical-align: middle;
        line-height: 0;
        display: inline-block
    }

    .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-text {
        display: table-cell;
        vertical-align: middle;
        font-size: 1.3rem;
        font-weight: 500;
        font-family: Roboto
    }

    .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-text small {
        display: inline-block;
        padding-left: 5px;
        font-size: 1rem;
        font-weight: 300;
        font-family: Roboto
    }

    .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-text .m-portlet__head-desc {
        margin-top: .4rem;
        display: block;
        font-size: .85rem;
        font-weight: 300;
        font-family: Roboto
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools {
        text-align: right;
        display: table-cell;
        vertical-align: middle
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav {
        display: table;
        text-align: right;
        float: right;
        padding: 0;
        margin: 0;
        height: 100%;
        list-style: none
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item {
        height: 100%;
        display: table-cell;
        vertical-align: middle;
        text-align: center;
        padding: 0 5px
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item.m-portlet__nav-item--last {
        padding-right: 0
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link {
        display: inline-block;
        vertical-align: middle
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon {
        padding: 0 2px
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon [class*=" la-"],
    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon [class^=la-] {
        font-size: 1.6rem
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon [class*=" fa-"],
    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon [class^=fa-] {
        font-size: 1.4rem
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon [class*=" flaticon-"],
    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon [class^=flaticon-] {
        font-size: 1.8rem
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon.m-portlet__nav-link--icon-lg [class*=" la-"],
    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon.m-portlet__nav-link--icon-lg [class^=la-] {
        font-size: 1.8rem
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon.m-portlet__nav-link--icon-lg [class*=" fa-"],
    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon.m-portlet__nav-link--icon-lg [class^=fa-] {
        font-size: 1.6rem
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon.m-portlet__nav-link--icon-lg [class*=" flaticon-"],
    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon.m-portlet__nav-link--icon-lg [class^=flaticon-] {
        font-size: 2rem
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon.m-portlet__nav-link--icon-xl [class*=" la-"],
    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon.m-portlet__nav-link--icon-xl [class^=la-] {
        font-size: 2.2rem
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon.m-portlet__nav-link--icon-xl [class*=" fa-"],
    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon.m-portlet__nav-link--icon-xl [class^=fa-] {
        font-size: 2rem
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon.m-portlet__nav-link--icon-xl [class*=" flaticon-"],
    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon.m-portlet__nav-link--icon-xl [class^=flaticon-] {
        font-size: 2.4rem
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon i {
        vertical-align: middle;
        line-height: 0;
        display: inline-block
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link:hover {
        text-decoration: none
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item:first-child .m-portlet__nav-item {
        padding-right: 0
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .nav.nav-pills,
    .m-portlet .m-portlet__head .m-portlet__head-tools .nav.nav-tabs {
        margin: 0
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .nav.nav-pills.m-nav-pills--align-right {
        float: right
    }

    .m-portlet .m-portlet__head.m-portlet__head--fit {
        position: relative;
        z-index: 1
    }

    .m-portlet .m-portlet__body {
        padding: 2.2rem 2.2rem
    }

    .m-portlet .m-portlet__body.m-portlet__body--no-padding {
        padding: 0
    }

    .m-portlet .m-portlet__body.m-portlet__body--no-top-padding {
        padding-top: 0
    }

    .m-portlet .m-portlet__body.m-portlet__body--no-left-padding {
        padding-left: 0
    }

    .m-portlet .m-portlet__body.m-portlet__body--no-right-padding {
        padding-right: 0
    }

    .m-portlet .m-portlet__foot {
        padding: 1.1rem 2.2rem
    }

    .m-portlet .m-portlet__foot.m-portlet__foot--fit {
        padding: 0
    }

    .m-portlet.m-portlet--full-height {
        height: calc(100% - 2.2rem)
    }

    .m-portlet.m-portlet--full-height .m-portlet__body {
        height: calc(100% - 2.2rem - 2.2rem)
    }

    .m-portlet.m-portlet--half-height {
        height: calc(50% - 2.2rem)
    }

    .m-portlet.m-portlet--fit {
        position: relative
    }

    .m-portlet.m-portlet--widget-fit .m-portlet__head {
        position: relative;
        z-index: 1
    }

    .m-portlet.m-portlet--bordered-semi .m-portlet__body {
        padding-top: .5rem
    }

    .m-portlet.m-portlet--space {
        padding: 0 2.2rem
    }

    .m-portlet.m-portlet--space .m-portlet__head {
        padding: 2.2rem 0
    }

    .m-portlet.m-portlet--space .m-portlet__body {
        padding: 2.2rem 0
    }

    .m-portlet.m-portlet--space .m-portlet__foot>.m-form__actions {
        padding: 2.2rem 0
    }

    .m-portlet.m-portlet--tabs .m-portlet__head {
        padding: 0 2.2rem
    }

    .m-portlet.m-portlet--tabs .m-portlet__head .m-portlet__head-tools {
        padding: 0
    }

    .m-portlet.m-portlet--tabs .m-portlet__head .m-portlet__head-tools .m-tabs-line {
        position: relative;
        height: 100%;
        margin: 0;
        border-bottom-color: transparent;
        bottom: -1px
    }

    .m-portlet.m-portlet--tabs .m-portlet__head .m-portlet__head-tools .m-tabs-line .m-tabs__link {
        height: 100%;
        padding: 1.7rem 0 1.5rem 0
    }

    .m-portlet.m-portlet--tabs .m-portlet__head .m-portlet__head-tools .m-tabs-line.m-tabs-line--2x {
        bottom: -3px
    }

    .m-portlet.m-portlet--last {
        margin-bottom: 0
    }

    .m-portlet.m-portlet--head-sm .m-portlet__head {
        height: 4.1rem
    }

    .m-portlet.m-portlet--head-sm .m-portlet__head .m-portlet__head-tools {
        padding: 0
    }

    .m-portlet.m-portlet--head-sm .m-portlet__head .m-portlet__head-tools .m-tabs-line .m-tabs__link {
        height: 100%;
        padding: 1.2rem 0 1.2rem 0
    }

    .m-portlet.m-portlet--head-sm .m-portlet__body,
    .m-portlet.m-portlet--head-sm .m-portlet__foot {
        padding-top: 1.7rem;
        padding-bottom: 1.7rem
    }

    .m-portlet.m-portlet--unair {
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none
    }

    .m-portlet.m-portlet--rounded {
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        -ms-border-radius: 4px;
        -o-border-radius: 4px;
        border-radius: 4px
    }

    .m-portlet.m-portlet--rounded .m-portlet__head {
        -webkit-border-top-left-radius: 4px;
        -moz-border-top-left-radius: 4px;
        -ms-border-top-left-radius: 4px;
        -o-border-top-left-radius: 4px;
        border-top-left-radius: 4px;
        -webkit-border-top-right-radius: 4px;
        -moz-border-top-right-radius: 4px;
        -ms-border-top-right-radius: 4px;
        -o-border-top-right-radius: 4px;
        border-top-right-radius: 4px
    }

    .m-portlet.m-portlet--rounded .m-portlet__body {
        -webkit-border-bottom-left-radius: 4px;
        -moz-border-bottom-left-radius: 4px;
        -ms-border-bottom-left-radius: 4px;
        -o-border-bottom-left-radius: 4px;
        border-bottom-left-radius: 4px;
        -webkit-border-bottom-right-radius: 4px;
        -moz-border-bottom-right-radius: 4px;
        -ms-border-bottom-right-radius: 4px;
        -o-border-bottom-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    .m-portlet.m-portlet--rounded .m-portlet__foot {
        -webkit-border-bottom-left-radius: 4px;
        -moz-border-bottom-left-radius: 4px;
        -ms-border-bottom-left-radius: 4px;
        -o-border-bottom-left-radius: 4px;
        border-bottom-left-radius: 4px;
        -webkit-border-bottom-right-radius: 4px;
        -moz-border-bottom-right-radius: 4px;
        -ms-border-bottom-right-radius: 4px;
        -o-border-bottom-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    @media (max-width:768px) {
        .m-portlet.m-portlet--responsive-mobile .m-portlet__head {
            display: block;
            height: auto
        }
        .m-portlet.m-portlet--responsive-mobile .m-portlet__head .m-portlet__head-caption {
            display: block;
            padding-top: .9rem;
            padding-bottom: .9rem
        }
        .m-portlet.m-portlet--responsive-mobile .m-portlet__head .m-portlet__head-tools {
            text-align: left;
            display: block;
            padding-top: .45rem;
            padding-bottom: .9rem
        }
    }

    @media (max-width:992px) {
        .m-portlet.m-portlet--responsive-tablet-and-mobile .m-portlet__head {
            display: block;
            height: auto
        }
        .m-portlet.m-portlet--responsive-tablet-and-mobile .m-portlet__head .m-portlet__head-caption {
            display: block;
            padding-top: .9rem;
            padding-bottom: .9rem
        }
        .m-portlet.m-portlet--responsive-tablet-and-mobile .m-portlet__head .m-portlet__head-tools {
            text-align: left;
            display: block;
            padding-top: .45rem;
            padding-bottom: .9rem
        }
    }

    .m-portlet .m-form.m-form--fit>.m-portlet__body {
        padding-left: 0;
        padding-right: 0
    }

    .m-portlet.m-portlet--sortable .m-portlet__head {
        cursor: move
    }

    .m-portlet.m-portlet--sortable-empty {
        visibility: hidden;
        height: 45px;
        min-height: 125px
    }

    .m-portlet .m-portlet-fit--sides {
        margin-left: -2.2rem;
        margin-right: -2.2rem
    }

    .m-portlet .m-portlet-fit--bottom {
        margin-bottom: -2.2rem
    }

    .m-portlet .m-portlet-fit--top {
        margin-top: -7.3rem
    }

    .m-portlet.m-portlet--bordered-semi .m-portlet-fit--top {
        margin-top: -5.6rem
    }

    .m-portlet .m-portlet__body-separator {
        height: 0;
        overflow: hidden;
        margin: 30px -2.2rem
    }

    @media (max-width:992px) {
        .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-text {
            font-size: 1.1rem
        }
        .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-text small {
            font-size: .85rem
        }
        .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-text .m-portlet__head-desc {
            font-size: .85rem
        }
    }

    .m-portlet {
        -webkit-box-shadow: 0 1px 15px 1px rgba(113, 106, 202, .08);
        -moz-box-shadow: 0 1px 15px 1px rgba(113, 106, 202, .08);
        box-shadow: 0 1px 15px 1px rgba(113, 106, 202, .08);
        background-color: #fff
    }

    .m-portlet .m-portlet__head {
        border-bottom: 1px solid #ebedf2
    }

    .m-portlet .m-portlet__head .m-portlet__head-icon {
        color: #b2b1c5
    }

    .m-portlet .m-portlet__head .m-portlet__head-text {
        color: #575962
    }

    .m-portlet .m-portlet__head .m-portlet__head-text .m-portlet__head-desc,
    .m-portlet .m-portlet__head .m-portlet__head-text small {
        color: #afb2c1
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon i {
        color: #afb0c7
    }

    .m-portlet .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon:hover i {
        color: #716aca
    }

    .m-portlet .m-portlet__body {
        color: #575962
    }

    .m-portlet .m-portlet__foot:not(.m-portlet__no-border) {
        border-top: 1px solid #ebedf2
    }

    .m-portlet .m-portlet__foot:not(.m-portlet__no-border).m-portlet__foot--top {
        border-top: 0;
        border-bottom: 1px solid #ebedf2
    }

    .m-portlet .m-portlet__foot:not(.m-portlet__no-border).m-portlet__foot-no-border {
        border: 0
    }

    .m-portlet.m-portlet--bordered {
        border: 1px solid #ebedf2
    }

    .m-portlet.m-portlet--bordered-semi .m-portlet__head {
        border: 0
    }

    .m-portlet.ui-sortable-helper {
        border: 1px dashed #ebedf2
    }

    .m-portlet .m-portlet__body-separator {
        border-bottom: 1px solid #f4f5f8
    }

    .m-portlet.m-portlet--skin-dark {
        -webkit-box-shadow: 0 1px 15px 1px rgba(113, 106, 202, .55);
        -moz-box-shadow: 0 1px 15px 1px rgba(113, 106, 202, .55);
        box-shadow: 0 1px 15px 1px rgba(113, 106, 202, .55);
        background-color: #2c2e3e
    }

    .m-portlet.m-portlet--skin-dark .m-portlet__head {
        border-bottom: 1px solid #a1a4b1
    }

    .m-portlet.m-portlet--skin-dark .m-portlet__head .m-portlet__head-icon {
        color: #fff
    }

    .m-portlet.m-portlet--skin-dark .m-portlet__head .m-portlet__head-text {
        color: #fff
    }

    .m-portlet.m-portlet--skin-dark .m-portlet__head .m-portlet__head-text .m-portlet__head-desc,
    .m-portlet.m-portlet--skin-dark .m-portlet__head .m-portlet__head-text small {
        color: #c9c9e0
    }

    .m-portlet.m-portlet--skin-dark .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon i {
        color: rgba(255, 255, 255, .6)
    }

    .m-portlet.m-portlet--skin-dark .m-portlet__head .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon:hover i {
        color: #fff
    }

    .m-portlet.m-portlet--skin-dark .m-portlet__body {
        color: #fff
    }

    .m-portlet.m-portlet--skin-dark .m-portlet__foot:not(.m-portlet__no-border) {
        border-top: 1px solid #a1a4b1
    }

    .m-portlet.m-portlet--skin-dark .m-portlet__foot:not(.m-portlet__no-border).m-portlet__foot--top {
        border-top: 0;
        border-bottom: 1px solid #a1a4b1
    }

    .m-portlet.m-portlet--skin-dark .m-portlet__foot:not(.m-portlet__no-border).m-portlet__foot-no-border {
        border: 0
    }

    .m-portlet.m-portlet--skin-dark.m-portlet--bordered {
        border: 1px solid #a1a4b1
    }

    .m-portlet.m-portlet--skin-dark.m-portlet--bordered-semi .m-portlet__head {
        border: 0
    }

    .m-portlet.m-portlet--skin-dark.ui-sortable-helper {
        border: 1px dashed #a1a4b1
    }

    .m-portlet.m-portlet--skin-dark .m-portlet__body-separator {
        border-bottom: 1px solid #999caa
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg {
        background: #716aca;
        border-color: #716aca
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head {
        background-color: #716aca;
        border-color: #716aca
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-icon {
        color: #f7f7f7
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text {
        color: #fff
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text small {
        color: #f0f0f0
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon i {
        color: #f7f7f7
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon:hover i {
        color: #fff
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .btn-outline-light {
        border-color: rgba(255, 255, 255, .1)
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line {
        bottom: 0;
        border: 0
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item {
        margin: 0 1px 0 0
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item:last-child {
        margin-right: 0
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link {
        padding-left: 20px;
        padding-right: 20px;
        color: #fff;
        border: 0;
        opacity: .8
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link>i {
        color: #f0f0f0
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        border-bottom: 0
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link,
    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active,
    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        padding-left: 20px;
        padding-right: 20px;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        -o-border-radius: 0;
        border-radius: 0;
        opacity: 1;
        background: 0 0;
        color: #fff;
        border: 0;
        background: rgba(255, 255, 255, .08)
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link>i,
    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active>i,
    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover>i {
        color: #fff
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__body {
        background: #fff
    }

    .m-portlet.m-portlet--brand.m-portlet--head-solid-bg .m-portlet__foot {
        background: #fff;
        border-color: #716aca
    }

    .m-portlet.m-portlet--border-bottom-brand {
        border-bottom: 3px solid #716aca
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg {
        background: #c4c5d6;
        border-color: #c4c5d6
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head {
        background-color: #c4c5d6;
        border-color: #c4c5d6
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-icon {
        color: #090909
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text {
        color: #111
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text small {
        color: #020202
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon i {
        color: #090909
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon:hover i {
        color: #111
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .btn-outline-light {
        border-color: rgba(255, 255, 255, .1)
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line {
        bottom: 0;
        border: 0
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item {
        margin: 0 1px 0 0
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item:last-child {
        margin-right: 0
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link {
        padding-left: 20px;
        padding-right: 20px;
        color: #111;
        border: 0;
        opacity: .8
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link>i {
        color: #020202
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        border-bottom: 0
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link,
    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active,
    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        padding-left: 20px;
        padding-right: 20px;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        -o-border-radius: 0;
        border-radius: 0;
        opacity: 1;
        background: 0 0;
        color: #111;
        border: 0;
        background: rgba(17, 17, 17, .08)
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link>i,
    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active>i,
    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover>i {
        color: #1e1e1e
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__body {
        background: #fff
    }

    .m-portlet.m-portlet--metal.m-portlet--head-solid-bg .m-portlet__foot {
        background: #fff;
        border-color: #c4c5d6
    }

    .m-portlet.m-portlet--border-bottom-metal {
        border-bottom: 3px solid #c4c5d6
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg {
        background: #fff;
        border-color: #fff
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head {
        background-color: #fff;
        border-color: #fff
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-icon {
        color: #222433
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text {
        color: #282a3c
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text small {
        color: #1c1d2a
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon i {
        color: #222433
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon:hover i {
        color: #282a3c
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .btn-outline-light {
        border-color: rgba(255, 255, 255, .1)
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line {
        bottom: 0;
        border: 0
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item {
        margin: 0 1px 0 0
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item:last-child {
        margin-right: 0
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link {
        padding-left: 20px;
        padding-right: 20px;
        color: #282a3c;
        border: 0;
        opacity: .8
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link>i {
        color: #1c1d2a
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        border-bottom: 0
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link,
    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active,
    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        padding-left: 20px;
        padding-right: 20px;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        -o-border-radius: 0;
        border-radius: 0;
        opacity: 1;
        background: 0 0;
        color: #282a3c;
        border: 0;
        background: rgba(40, 42, 60, .08)
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link>i,
    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active>i,
    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover>i {
        color: #32354b
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__body {
        background: #fff
    }

    .m-portlet.m-portlet--light.m-portlet--head-solid-bg .m-portlet__foot {
        background: #fff;
        border-color: #fff
    }

    .m-portlet.m-portlet--border-bottom-light {
        border-bottom: 3px solid #fff
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg {
        background: #00c5dc;
        border-color: #00c5dc
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head {
        background-color: #00c5dc;
        border-color: #00c5dc
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-icon {
        color: #f7f7f7
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text {
        color: #fff
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text small {
        color: #f0f0f0
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon i {
        color: #f7f7f7
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon:hover i {
        color: #fff
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .btn-outline-light {
        border-color: rgba(255, 255, 255, .1)
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line {
        bottom: 0;
        border: 0
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item {
        margin: 0 1px 0 0
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item:last-child {
        margin-right: 0
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link {
        padding-left: 20px;
        padding-right: 20px;
        color: #fff;
        border: 0;
        opacity: .8
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link>i {
        color: #f0f0f0
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        border-bottom: 0
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link,
    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active,
    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        padding-left: 20px;
        padding-right: 20px;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        -o-border-radius: 0;
        border-radius: 0;
        opacity: 1;
        background: 0 0;
        color: #fff;
        border: 0;
        background: rgba(255, 255, 255, .08)
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link>i,
    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active>i,
    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover>i {
        color: #fff
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__body {
        background: #fff
    }

    .m-portlet.m-portlet--accent.m-portlet--head-solid-bg .m-portlet__foot {
        background: #fff;
        border-color: #00c5dc
    }

    .m-portlet.m-portlet--border-bottom-accent {
        border-bottom: 3px solid #00c5dc
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg {
        background: #9816f4;
        border-color: #9816f4
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head {
        background-color: #9816f4;
        border-color: #9816f4
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-icon {
        color: #f7f7f7
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text {
        color: #fff
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text small {
        color: #f0f0f0
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon i {
        color: #f7f7f7
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon:hover i {
        color: #fff
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .btn-outline-light {
        border-color: rgba(255, 255, 255, .1)
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line {
        bottom: 0;
        border: 0
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item {
        margin: 0 1px 0 0
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item:last-child {
        margin-right: 0
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link {
        padding-left: 20px;
        padding-right: 20px;
        color: #fff;
        border: 0;
        opacity: .8
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link>i {
        color: #f0f0f0
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        border-bottom: 0
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link,
    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active,
    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        padding-left: 20px;
        padding-right: 20px;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        -o-border-radius: 0;
        border-radius: 0;
        opacity: 1;
        background: 0 0;
        color: #fff;
        border: 0;
        background: rgba(255, 255, 255, .08)
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link>i,
    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active>i,
    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover>i {
        color: #fff
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__body {
        background: #fff
    }

    .m-portlet.m-portlet--focus.m-portlet--head-solid-bg .m-portlet__foot {
        background: #fff;
        border-color: #9816f4
    }

    .m-portlet.m-portlet--border-bottom-focus {
        border-bottom: 3px solid #9816f4
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg {
        background: #5867dd;
        border-color: #5867dd
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head {
        background-color: #5867dd;
        border-color: #5867dd
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-icon {
        color: #f7f7f7
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text {
        color: #fff
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text small {
        color: #f0f0f0
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon i {
        color: #f7f7f7
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon:hover i {
        color: #fff
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .btn-outline-light {
        border-color: rgba(255, 255, 255, .1)
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line {
        bottom: 0;
        border: 0
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item {
        margin: 0 1px 0 0
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item:last-child {
        margin-right: 0
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link {
        padding-left: 20px;
        padding-right: 20px;
        color: #fff;
        border: 0;
        opacity: .8
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link>i {
        color: #f0f0f0
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        border-bottom: 0
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link,
    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active,
    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        padding-left: 20px;
        padding-right: 20px;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        -o-border-radius: 0;
        border-radius: 0;
        opacity: 1;
        background: 0 0;
        color: #fff;
        border: 0;
        background: rgba(255, 255, 255, .08)
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link>i,
    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active>i,
    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover>i {
        color: #fff
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__body {
        background: #fff
    }

    .m-portlet.m-portlet--primary.m-portlet--head-solid-bg .m-portlet__foot {
        background: #fff;
        border-color: #5867dd
    }

    .m-portlet.m-portlet--border-bottom-primary {
        border-bottom: 3px solid #5867dd
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg {
        background: #34bfa3;
        border-color: #34bfa3
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head {
        background-color: #34bfa3;
        border-color: #34bfa3
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-icon {
        color: #f7f7f7
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text {
        color: #fff
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text small {
        color: #f0f0f0
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon i {
        color: #f7f7f7
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon:hover i {
        color: #fff
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .btn-outline-light {
        border-color: rgba(255, 255, 255, .1)
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line {
        bottom: 0;
        border: 0
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item {
        margin: 0 1px 0 0
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item:last-child {
        margin-right: 0
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link {
        padding-left: 20px;
        padding-right: 20px;
        color: #fff;
        border: 0;
        opacity: .8
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link>i {
        color: #f0f0f0
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        border-bottom: 0
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link,
    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active,
    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        padding-left: 20px;
        padding-right: 20px;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        -o-border-radius: 0;
        border-radius: 0;
        opacity: 1;
        background: 0 0;
        color: #fff;
        border: 0;
        background: rgba(255, 255, 255, .08)
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link>i,
    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active>i,
    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover>i {
        color: #fff
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__body {
        background: #fff
    }

    .m-portlet.m-portlet--success.m-portlet--head-solid-bg .m-portlet__foot {
        background: #fff;
        border-color: #34bfa3
    }

    .m-portlet.m-portlet--border-bottom-success {
        border-bottom: 3px solid #34bfa3
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg {
        background: #36a3f7;
        border-color: #36a3f7
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head {
        background-color: #36a3f7;
        border-color: #36a3f7
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-icon {
        color: #f7f7f7
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text {
        color: #fff
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text small {
        color: #f0f0f0
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon i {
        color: #f7f7f7
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon:hover i {
        color: #fff
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .btn-outline-light {
        border-color: rgba(255, 255, 255, .1)
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line {
        bottom: 0;
        border: 0
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item {
        margin: 0 1px 0 0
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item:last-child {
        margin-right: 0
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link {
        padding-left: 20px;
        padding-right: 20px;
        color: #fff;
        border: 0;
        opacity: .8
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link>i {
        color: #f0f0f0
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        border-bottom: 0
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link,
    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active,
    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        padding-left: 20px;
        padding-right: 20px;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        -o-border-radius: 0;
        border-radius: 0;
        opacity: 1;
        background: 0 0;
        color: #fff;
        border: 0;
        background: rgba(255, 255, 255, .08)
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link>i,
    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active>i,
    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover>i {
        color: #fff
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__body {
        background: #fff
    }

    .m-portlet.m-portlet--info.m-portlet--head-solid-bg .m-portlet__foot {
        background: #fff;
        border-color: #36a3f7
    }

    .m-portlet.m-portlet--border-bottom-info {
        border-bottom: 3px solid #36a3f7
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg {
        background: #ffb822;
        border-color: #ffb822
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head {
        background-color: #ffb822;
        border-color: #ffb822
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-icon {
        color: #090909
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text {
        color: #111
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text small {
        color: #020202
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon i {
        color: #090909
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon:hover i {
        color: #111
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .btn-outline-light {
        border-color: rgba(255, 255, 255, .1)
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line {
        bottom: 0;
        border: 0
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item {
        margin: 0 1px 0 0
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item:last-child {
        margin-right: 0
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link {
        padding-left: 20px;
        padding-right: 20px;
        color: #111;
        border: 0;
        opacity: .8
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link>i {
        color: #020202
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        border-bottom: 0
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link,
    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active,
    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        padding-left: 20px;
        padding-right: 20px;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        -o-border-radius: 0;
        border-radius: 0;
        opacity: 1;
        background: 0 0;
        color: #111;
        border: 0;
        background: rgba(17, 17, 17, .08)
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link>i,
    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active>i,
    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover>i {
        color: #1e1e1e
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__body {
        background: #fff
    }

    .m-portlet.m-portlet--warning.m-portlet--head-solid-bg .m-portlet__foot {
        background: #fff;
        border-color: #ffb822
    }

    .m-portlet.m-portlet--border-bottom-warning {
        border-bottom: 3px solid #ffb822
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg {
        background: #f4516c;
        border-color: #f4516c
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head {
        background-color: #f4516c;
        border-color: #f4516c
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-icon {
        color: #f7f7f7
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text {
        color: #fff
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head .m-portlet__head-text small {
        color: #f0f0f0
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon i {
        color: #f7f7f7
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .m-portlet__nav .m-portlet__nav-item .m-portlet__nav-link.m-portlet__nav-link--icon:hover i {
        color: #fff
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .btn-outline-light {
        border-color: rgba(255, 255, 255, .1)
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line {
        bottom: 0;
        border: 0
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item {
        margin: 0 1px 0 0
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item:last-child {
        margin-right: 0
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link {
        padding-left: 20px;
        padding-right: 20px;
        color: #fff;
        border: 0;
        opacity: .8
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link>i {
        color: #f0f0f0
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        border-bottom: 0
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link,
    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active,
    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover {
        padding-left: 20px;
        padding-right: 20px;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        -o-border-radius: 0;
        border-radius: 0;
        opacity: 1;
        background: 0 0;
        color: #fff;
        border: 0;
        background: rgba(255, 255, 255, .08)
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__item.show .m-tabs__link>i,
    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link.active>i,
    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__head-tools .m-tabs-line .m-tabs__link:hover>i {
        color: #fff
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__body {
        background: #fff
    }

    .m-portlet.m-portlet--danger.m-portlet--head-solid-bg .m-portlet__foot {
        background: #fff;
        border-color: #f4516c
    }

    .m-portlet.m-portlet--border-bottom-danger {
        border-bottom: 3px solid #f4516c
    }


    .m-widget1 {
        padding: 2.2rem
    }

    .m-widget1.m-widget1--paddingless {
        padding: 0
    }

    .m-widget1 .m-widget1__item {
        padding: 1.1rem 0
    }

    .m-widget1 .m-widget1__item .m-widget1__title {
        font-size: 1.2rem;
        font-weight: 500;
        margin-bottom: 0
    }

    .m-widget1 .m-widget1__item .m-widget1__desc {
        display: inline-block;
        margin-top: .21rem;
        font-size: 1rem;
        font-weight: 300
    }

    .m-widget1 .m-widget1__item .m-widget1__number {
        font-size: 1.5rem;
        font-weight: 600
    }

    .m-widget1 .m-widget1__item:first-child {
        padding-top: .8rem
    }

    .m-widget1 .m-widget1__item:last-child {
        padding-bottom: .8rem
    }

    .m-widget1__item {
        border-bottom: .07rem dashed #ebedf2
    }

    .m-widget1__item .m-widget1__title {
        color: #3f4047
    }

    .m-widget1__item .m-widget1__desc {
        color: #9699a2
    }

    .m-widget1__item .m-widget1__number {
        color: #6f727d
    }

    .m-widget1__item:last-child {
        border-bottom: 0
    }

    .m-widget2 .m-widget2__item {
        disply: table;
        margin-bottom: 1.4rem;
        position: relative
    }

    .m-widget2 .m-widget2__item:before {
        position: absolute;
        display: block;
        width: .3rem;
        border-radius: 4px;
        width: 4px;
        border-radius: 4px;
        height: 100%;
        left: .8rem;
        content: ""
    }

    .m-widget2 .m-widget2__item .m-widget2__checkbox {
        display: table-cell;
        vertical-align: middle;
        padding-left: 2.2rem;
        padding-top: 1rem;
        vertical-align: top
    }

    .m-widget2 .m-widget2__item .m-widget2__desc {
        display: table-cell;
        width: 100%;
        vertical-align: top;
        padding-left: .3rem;
        padding-top: .23rem;
        font-size: 1rem
    }

    .m-widget2 .m-widget2__item .m-widget2__desc .m-widget2__text {
        font-size: 1rem;
        font-weight: 400
    }

    .m-widget2 .m-widget2__item .m-widget2__desc .m-widget2__user-name .m-widget2__link {
        font-size: .85rem
    }

    .m-widget2 .m-widget2__item .m-widget2__desc .m-widget2__user-name .m-widget2__link:hover {
        text-decoration: none
    }

    .m-widget2 .m-widget2__item .m-widget2__actions {
        display: table-cell;
        vertical-align: top;
        padding-left: .8rem;
        padding-top: .8rem
    }

    .m-widget2 .m-widget2__item .m-widget2__actions .m-widget2__actions-nav {
        visibility: hidden
    }

    .m-widget2 .m-widget2__item .m-widget2__actions .m-widget2__actions-nav .m-dropdown__toggle {
        text-decoration: none;
        font-size: 1.5rem
    }

    .m-widget2 .m-widget2__item:hover .m-widget2__actions .m-widget2__actions-nav {
        visibility: visible
    }

    .m-widget2 .m-widget2__item:hover {
        cursor: pointer
    }

    .m-widget2 .m-widget2__item:hover .m-widget2__actions-nav {
        visibility: hidden
    }

    .m-widget2 .m-widget2__item:hover .m-widget2__actions .m-widget2__actions-nav {
        visibility: visible
    }

    .m-widget2__item .m-widget2__desc .m-widget2__text {
        color: #575962
    }

    .m-widget2__item .m-widget2__desc .m-widget2__user-name .m-widget2__link {
        color: #575962
    }

    .m-widget2__item.m-widget2__item--brand:before {
        background: #716aca
    }

    .m-widget2__item.m-widget2__item--metal:before {
        background: #c4c5d6
    }

    .m-widget2__item.m-widget2__item--light:before {
        background: #fff
    }

    .m-widget2__item.m-widget2__item--accent:before {
        background: #00c5dc
    }

    .m-widget2__item.m-widget2__item--focus:before {
        background: #9816f4
    }

    .m-widget2__item.m-widget2__item--primary:before {
        background: #5867dd
    }

    .m-widget2__item.m-widget2__item--success:before {
        background: #34bfa3
    }

    .m-widget2__item.m-widget2__item--info:before {
        background: #36a3f7
    }

    .m-widget2__item.m-widget2__item--warning:before {
        background: #ffb822
    }

    .m-widget2__item.m-widget2__item--danger:before {
        background: #f4516c
    }

    .m-widget3 .m-widget3__item {
        margin-bottom: .8rem
    }

    .m-widget3 .m-widget3__item .m-widget3__header {
        display: table
    }

    .m-widget3 .m-widget3__item .m-widget3__header .m-widget3__user-img {
        margin-bottom: .7rem
    }

    .m-widget3 .m-widget3__item .m-widget3__header .m-widget3__user-img .m-widget3__img {
        width: 3.2rem;
        border-radius: 50%
    }

    .m-widget3 .m-widget3__item .m-widget3__header .m-widget3__info {
        display: table-cell;
        width: 100%;
        padding-left: 1rem;
        font-size: 1rem;
        vertical-align: middle
    }

    .m-widget3 .m-widget3__item .m-widget3__header .m-widget3__info .m-widget3__username {
        font-size: 1rem;
        font-weight: 500
    }

    .m-widget3 .m-widget3__item .m-widget3__header .m-widget3__info .m-widget3__time {
        font-size: .85rem
    }

    .m-widget3 .m-widget3__item .m-widget3__header .m-widget3__status {
        display: table-cell;
        float: right;
        padding-top: 1.07rem;
        font-size: 1rem;
        font-weight: 500
    }

    .m-widget3 .m-widget3__item .m-widget3__body .m-widget3__text {
        font-size: 1rem
    }

    .m-widget3 .m-widget3__item {
        border-bottom: .07rem dashed #ebedf2
    }

    .m-widget3 .m-widget3__item .m-widget3__username {
        color: #575962
    }

    .m-widget3 .m-widget3__item .m-widget3__body .m-widget3__text {
        color: #898b96
    }

    .m-widget3 .m-widget3__item:last-child {
        border-bottom: 0
    }

    .m-widget4 .m-widget4__item {
        display: table;
        padding-top: 1.15rem;
        padding-bottom: 1.25rem
    }

    .m-widget4 .m-widget4__item .m-widget4__img {
        display: table-cell;
        vertical-align: middle
    }

    .m-widget4 .m-widget4__item .m-widget4__img.m-widget4__img--logo img {
        width: 3.5rem;
        border-radius: 50%
    }

    .m-widget4 .m-widget4__item .m-widget4__img.m-widget4__img--pic img {
        width: 4rem;
        border-radius: 50%
    }

    .m-widget4 .m-widget4__item .m-widget4__img.m-widget4__img--icon img {
        width: 2.1rem
    }

    .m-widget4 .m-widget4__item .m-widget4__info {
        display: table-cell;
        width: 100%;
        padding-left: 1.2rem;
        padding-right: 1.2rem;
        font-size: 1rem;
        vertical-align: middle
    }

    .m-widget4 .m-widget4__item .m-widget4__info .m-widget4__text {
        font-size: 1rem;
        font-weight: 500
    }

    .m-widget4 .m-widget4__item .m-widget4__info .m-widget4__title {
        font-size: 1rem;
        font-weight: 600
    }

    .m-widget4 .m-widget4__item .m-widget4__info .m-widget4__sub {
        font-size: .85rem
    }

    .m-widget4 .m-widget4__item .m-widget4__ext {
        display: table-cell;
        vertical-align: middle
    }

    .m-widget4 .m-widget4__item .m-widget4__ext .m-widget4__number {
        font-size: 1.2rem;
        font-weight: 600
    }

    .m-widget4 .m-widget4__item .m-widget4__ext .m-widget4__icon>i {
        font-size: 1.6rem
    }

    .m-widget4 .m-widget4__item .m-widget4__ext .m-widget4__icon.m-widget4__icon--2x>i {
        font-size: 2.2rem
    }

    .m-widget4 .m-widget4__item .m-widget4__ext .m-widget4__icon:hover {
        text-decoration: none
    }

    .m-widget4.m-widget4--progress .m-widget4__info {
        width: 50%
    }

    .m-widget4.m-widget4--progress .m-widget4__progress {
        display: table-cell;
        vertical-align: middle;
        padding-left: 2rem;
        padding-right: 2rem;
        width: 50%
    }

    .m-widget4.m-widget4--progress .m-widget4__progress .m-widget4__progress-wrapper .m-widget17__progress-number {
        font-size: 1.1rem;
        font-weight: 600
    }

    .m-widget4.m-widget4--progress .m-widget4__progress .m-widget4__progress-wrapper .m-widget17__progress-label {
        font-size: .85rem;
        float: right;
        margin-top: .3rem
    }

    .m-widget4.m-widget4--progress .m-widget4__progress .m-widget4__progress-wrapper .progress {
        display: block;
        margin-top: .8rem
    }

    .m-widget4 .m-widget4__chart {
        position: relative
    }

    .m-widget4.m-widget4--chart-bottom .m-widget4__chart {
        position: absolute;
        width: 100%;
        bottom: 0
    }

    .m-portlet--rounded .m-widget4.m-widget4--chart-bottom .m-widget4__chart canvas {
        -webkit-border-bottom-left-radius: 4px;
        -moz-border-bottom-left-radius: 4px;
        -ms-border-bottom-left-radius: 4px;
        -o-border-bottom-left-radius: 4px;
        border-bottom-left-radius: 4px;
        -webkit-border-bottom-right-radius: 4px;
        -moz-border-bottom-right-radius: 4px;
        -ms-border-bottom-right-radius: 4px;
        -o-border-bottom-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    .m-widget4__item {
        border-bottom: .07rem dashed #ebedf2
    }

    .m-widget4__item .m-widget4__number {
        color: #575962
    }

    .m-widget4__item .m-widget4__title {
        color: #575962
    }

    .m-widget4__item .m-widget4__sub {
        color: #7b7e8a
    }

    .m-widget4__item .m-widget4__text {
        color: #898b96
    }

    .m-widget4__item .m-widget4__icon>i {
        color: #c1bfd0
    }

    .m-widget4__item .m-widget4__icon:hover>i {
        color: #716aca
    }

    .m-widget4__item.m-widget4__item--last,
    .m-widget4__item:last-child {
        border-bottom: 0
    }

    .m-widget5 .m-widget5__item {
        display: table;
        width: 100%;
        margin-bottom: 1.43rem;
        padding-bottom: 1.57rem
    }

    .m-widget5 .m-widget5__item .m-widget5__pic {
        display: table-cell;
        width: 5rem
    }

    .m-widget5 .m-widget5__item .m-widget5__pic>img {
        width: 8.6rem
    }

    .m-widget5 .m-widget5__item .m-widget5__content {
        display: table-cell;
        vertical-align: top;
        padding-left: 1.43rem;
        padding-top: .3rem
    }

    .m-widget5 .m-widget5__item .m-widget5__content .m-widget5__title {
        font-size: 1.1rem;
        font-weight: 500
    }

    .m-widget5 .m-widget5__item .m-widget5__content .m-widget5__desc {
        font-size: .85rem
    }

    .m-widget5 .m-widget5__item .m-widget5__content .m-widget5__info {
        margin-top: .71rem;
        font-size: 1rem
    }

    .m-widget5 .m-widget5__item .m-widget5__content .m-widget5__info .m-widget5__info-author {
        font-weight: 500;
        margin-right: .71rem
    }

    .m-widget5 .m-widget5__item .m-widget5__content .m-widget5__info .m-widget5__info-date {
        font-weight: 500
    }

    .m-widget5 .m-widget5__item .m-widget5__stats1 {
        display: table-cell;
        text-align: right;
        width: 7.1rem;
        padding-top: 1.07rem;
        vertical-align: top
    }

    .m-widget5 .m-widget5__item .m-widget5__stats1 .m-widget5__number {
        font-size: 1.5rem;
        font-weight: 600
    }

    .m-widget5 .m-widget5__item .m-widget5__stats1 .m-widget5__sales {
        font-size: 1rem
    }

    .m-widget5 .m-widget5__item .m-widget5__stats2 {
        display: table-cell;
        text-align: right;
        padding-top: 1.07rem;
        width: 5.7rem;
        vertical-align: top;
        padding-left: 3.6rem
    }

    .m-widget5 .m-widget5__item .m-widget5__stats2 .m-widget5__number {
        font-size: 1.5rem;
        font-weight: 600
    }

    .m-widget5 .m-widget5__item .m-widget5__stats2 .m-widget5__votes {
        font-size: 1rem
    }

    .m-widget5 .m-widget5__item {
        border-bottom: .07rem dashed #ebedf2
    }

    .m-widget5 .m-widget5__item .m-widget5__title {
        color: #333439
    }

    .m-widget5 .m-widget5__item .m-widget5__desc {
        color: #6f727d
    }

    .m-widget5 .m-widget5__item .m-widget5__author {
        color: #6f727d
    }

    .m-widget5 .m-widget5__item .m-widget5__info-label {
        color: #6f727d
    }

    .m-widget5 .m-widget5__item .m-widget5__stats1 .m-widget5__number {
        color: #6f727d
    }

    .m-widget5 .m-widget5__item .m-widget5__stats1 .m-widget5__sales {
        color: #6f727d
    }

    .m-widget5 .m-widget5__item .m-widget5__stats2 .m-widget5__number {
        color: #6f727d
    }

    .m-widget5 .m-widget5__item .m-widget5__stats2 .m-widget5__votes {
        color: #6f727d
    }

    .m-widget5 .m-widget5__item:last-child {
        border-bottom: 0
    }

    .m-widget6 .m-widget6__head .m-widget6__action {
        margin-bottom: 2.14rem
    }

    .m-widget6 .m-widget6__head .m-widget6__item {
        display: table;
        width: 100%;
        margin-bottom: 1.07rem;
        font-size: 1rem;
        font-weight: 600
    }

    .m-widget6 .m-widget6__head .m-widget6__item .m-widget6__caption {
        display: table-cell;
        width: 33%;
        padding-left: 0;
        padding-right: 0
    }

    .m-widget6 .m-widget6__head .m-widget6__item .m-widget6__caption:last-child {
        padding-right: 0;
        padding-left: 0
    }

    .m-widget6 .m-widget6__body .m-widget6__item {
        display: table;
        width: 100%;
        padding-top: 1.07rem;
        padding-bottom: 1.07rem
    }

    .m-widget6 .m-widget6__body .m-widget6__item .m-widget6__text {
        display: table-cell;
        width: 33%;
        padding-left: 0;
        padding-right: 0;
        vertical-align: top;
        font-size: 1rem
    }

    .m-widget6 .m-widget6__foot .m-widget6__action {
        text-align: right;
        margin-top: 1rem
    }

    .m-widget6 .m-widget6__item {
        border-bottom: .07rem dashed #ebedf2
    }

    .m-widget6 .m-widget6__item .m-widget6__text {
        color: #898b96
    }

    .m-widget6 .m-widget6__item .m-widget6__caption {
        color: #a6a7c1
    }

    .m-widget6 .m-widget6__item:last-child {
        border-bottom: 0
    }

    .m-widget7 .m-widget7__desc {
        text-align: center;
        margin-top: 7rem;
        font-size: 1.3rem
    }

    .m-widget7 .m-widget7__user {
        margin: 0 auto;
        display: table;
        margin-top: .35rem;
        margin-bottom: 5rem
    }

    .m-widget7 .m-widget7__user .m-widget7__user-img .m-widget7__img {
        width: 2.6rem;
        border-radius: 50%;
        margin-top: 1.14rem
    }

    .m-widget7 .m-widget7__user .m-widget7__info {
        display: table-cell
    }

    .m-widget7 .m-widget7__user .m-widget7__info .m-widget7__username {
        margin-top: .71rem;
        margin-left: .71rem;
        font-size: 1rem;
        font-weight: 500
    }

    .m-widget7 .m-widget7__user .m-widget7__info .m-widget7__time {
        margin-left: .71rem;
        margin-top: .71rem;
        font-size: .85rem
    }

    .m-widget7 .m-widget7__button {
        text-align: center;
        margin-bottom: 2.85rem
    }

</style>

<div class="container">
    <div class="col-md-12">
        <!--begin:: Widgets/User Progress -->
        <div class="m-portlet m-portlet--full-height ">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Liste des agents disponibles
                        </h3>
                    </div>
                </div>

            </div>
            <div class="m-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="m_widget4_tab1_content">
                        <div class="m-widget4 m-widget4--progress">
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                </div>
                                <div class="m-widget4__info">
								<span class="m-widget4__title">
									Agent 1
								</span>
                                    <br>
                                    <span class="m-widget4__sub">
									300 dhs/h
								</span>
                                </div>
                                <div class="m-widget4__progress">
                                    <div class="m-widget4__progress-wrapper">
									<span class="m-widget17__progress-number">
										Disponnible dans 5 jours
									</span>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 63%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="63"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-primary">
                                        Voir profile
                                    </a>
                                    <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary" >
                                        Choisir.........
                                    </a>

                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                                </div>
                                <div class="m-widget4__info">
								<span class="m-widget4__title">
									Agent 2
								</span>
                                    <br>
                                    <span class="m-widget4__sub">
									500 dhs/h
								</span>
                                </div>
                                <div class="m-widget4__progress">
                                    <div class="m-widget4__progress-wrapper">
									<span class="m-widget17__progress-number">
										Disponible dans 2 jours
									</span>

                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 33%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="33"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-primary">
                                        Voir profile
                                    </a>
                                    <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary" >
                                        Choisir.........
                                    </a>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                                </div>
                                <div class="m-widget4__info">
								<span class="m-widget4__title">
									Agent 3
								</span>
                                    <br>
                                    <span class="m-widget4__sub">
									600 dhs/h
								</span>
                                </div>
                                <div class="m-widget4__progress">
                                    <div class="m-widget4__progress-wrapper">
									<span class="m-widget17__progress-number">
										Disponible Aujourd'hui
									</span>

                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-brand" role="progressbar" style="width: 13%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="13"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-primary">
                                        Voir profile
                                    </a>
                                    <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary" >
                                        Choisir.........
                                    </a>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                </div>
                                <div class="m-widget4__info">
								<span class="m-widget4__title">
									Agent 4
								</span>
                                    <br>
                                    <span class="m-widget4__sub">
								                                        400 dhs/h
								</span>
                                </div>
                                <div class="m-widget4__progress">
                                    <div class="m-widget4__progress-wrapper">
									<span class="m-widget17__progress-number">
										Disponible dans 3 jours
									</span>

                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 93%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="93"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-primary">
                                        Voir profile
                                    </a>
                                    <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary" >
                                        Choisir.........
                                    </a>
                                </div>
                            </div>
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                                </div>
                                <div class="m-widget4__info">
								<span class="m-widget4__title">
									Agent 5
								</span>
                                    <br>
                                    <span class="m-widget4__sub">
									300 dhs/h
								</span>
                                </div>
                                <div class="m-widget4__progress">
                                    <div class="m-widget4__progress-wrapper">
									<span class="m-widget17__progress-number">
										Disponible dans 5 jours
									</span>

                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-primary">
                                        Voir profile
                                    </a>
                                    <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary" >
                                        Choisir.........
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="m_widget4_tab2_content"></div>
                    <div class="tab-pane" id="m_widget4_tab3_content"></div>
                </div>
            </div>
        </div>
        <!--end:: Widgets/User Progress -->
    </div>
</div>
