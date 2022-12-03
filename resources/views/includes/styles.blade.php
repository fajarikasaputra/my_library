<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

    html,
    body {
        font-family: "Poppins";
        font-style: normal;
        background-color: #F8F8FA;
        overflow-x: hidden;
        position: relative;
    }

    .btn-statistics,
    .nav-input,
    .nav-input-group .btn-nav-input,
    .nav .btn-notif,
    #toggle-navbar {
        background-color: transparent;
        border: none;
        outline: none;
    }

    .screen-cover {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.4);
        display: block;
    }

    #toggle-navbar {
        margin-right: 15px;
        display: block;
    }

    @media (min-width: 1200px) {
        #toggle-navbar {
            display: none;
        }
    }

    aside {
        background-color: #fff;
        padding: 50px 24px;
        padding-bottom: 250px;
        height: 100vh;
        overflow-y: scroll;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 2;
    }

    aside #toggle-navbar {
        margin-left: 20px;
    }

    .sidebar-logo {
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-decoration: none;
    }

    @media (min-width: 1200px) {
        .sidebar-logo {
            padding: 0 24px;
            justify-content: center;
        }
    }

    .sidebar-logo span {
        font-weight: 800;
        font-size: 20px;
        line-height: 30px;
        color: #121F3E;
        margin-left: 16px;
    }

    .sidebar-title {
        font-weight: 400;
        font-size: 14px;
        line-height: 21px;
        color: #ABB3C4;
        margin-top: 40px;
        margin-bottom: 12px;
    }

    .sidebar-item {
        text-decoration: none;
        display: block;
        background: transparent;
        height: 46px;
        border-radius: 16px;
        padding: 0 11px;
        margin-bottom: 8px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .sidebar-item.active {
        background: #FF2E63;
    }

    .sidebar-item.active span {
        color: #fff;
    }

    .sidebar-item.active svg path {
        stroke: #fff;
    }

    .sidebar-item svg {
        width: 18px;
        height: 18px;
        margin-right: 20px;
    }

    .sidebar-item svg path {
        stroke: #ABB3C4;
    }

    .sidebar-item span {
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;
        /* identical to box height */
        color: #121F3E;
    }

    .col-navbar {
        transition: 1s;
    }

    .nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        padding: 50px 14px 24px 14px;
    }

    @media (min-width: 768px) {
        .nav {
            flex-wrap: nowrap;
        }
    }

    @media (min-width: 1200px) {
        .nav {
            padding: 50px 64px 24px 0px;
        }
    }

    .nav .btn-notif {
        width: 46px;
        height: 46px;
        background: #fff;
        border-radius: 50%;
        margin-left: 20px;
    }

    .nav .btn-notif img {
        width: 24px;
        height: 24px;
    }

    @media (min-width: 992px) {
        .nav .btn-notif {
            width: 52px;
        }
    }

    .nav-title {
        font-weight: 600;
        font-size: 32px;
        line-height: 48px;
        color: #121F3E;
    }

    .nav-input-container {
        width: 100%;
    }

    @media (min-width: 768px) {
        .nav-input-container {
            width: auto;
        }
    }

    .nav-input-group {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 46px;
        padding: 0 18px;
        width: 100%;
        background: #fff;
        border-radius: 100px;
    }

    .nav-input-group .btn-nav-input {
        width: auto;
    }

    @media (min-width: 768px) {
        .nav-input-group {
            width: 400px !important;
        }
    }

    @media (min-width: 992px) {
        .nav-input-group {
            width: 400px;
        }
    }

    @media (min-width: 1200px) {
        .nav-input-group {
            width: 500px;
        }
    }

    .nav-input {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        font-style: italic;
        font-weight: 300;
        font-size: 12px;
        line-height: 18px;
        color: #ABB3C4;
        width: 100%;
    }

    @media (min-width: 576px) {
        .nav-input {
            font-weight: 300;
            font-size: 16px;
            line-height: 24px;
        }
    }

    .content {
        padding: 10px 14px 24px 14px;
    }

    @media (min-width: 1200px) {
        .content {
            padding: 0px 64px 0px 0px;
        }
    }

    .content-title {
        font-weight: 500;
        font-size: 20px;
        line-height: 30px;
        color: #121F3E;
    }

    .content-title:first-of-type {
        margin-top: 5px;
    }

    .content-desc {
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;
        color: #ABB3C4;
    }

    .statistics-card {
        width: 100%;
        padding: 27px;
        background: #fff;
        border-radius: 26px;
        margin-bottom: 14px;
    }

    .statistics-card.simple {
        padding: 24px;
    }

    @media (min-width: 1200px) {
        .statistics-card {
            margin-bottom: 10px;
        }
    }

    .statistics-value {
        font-weight: 700;
        font-size: 32px;
        line-height: 48px;
        color: #121F3E;
    }

    .statistics-list {
        margin-top: 50px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .statistics-image {
        border: 2px solid white;
        border-radius: 50%;
        width: 36px;
        height: 36px;
    }

    .statistics-image:not(:last-child) {
        margin-right: -12px;
    }

    .statistics-icon {
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px solid white;
        border-radius: 50%;
        width: 36px;
        height: 36px;
    }

    .statistics-icon img {
        width: 18px;
        height: 18px;
    }

    .statistics-icon span {
        font-weight: 600;
        font-size: 12px;
        line-height: 18px;
        text-align: center;
    }

    .statistics-icon:not(:last-child) {
        margin-right: -12px;
    }

    .statistics-icon.award {
        background: #F4F9EC;
    }

    .statistics-icon.box {
        background: #ECE9FF;
    }

    .statistics-icon.globe {
        background: #ECF7F9;
    }

    .statistics-icon.target {
        background: #FFDDED;
    }

    .statistics-icon.one {
        background: #ECE9FF;
        color: #877AD8;
    }

    .statistics-icon.two {
        background: #FFFBEC;
        color: #FED54E;
    }

    .statistics-icon.three {
        background: #ECF7F9;
        color: #7AC9D8;
    }

    .statistics-icon.four {
        background: #FEF6EC;
        color: #F9AC44;
    }

    .statistics-icon.five {
        background: #F4F9EC;
        color: #9DC454;
    }

    .document-card {
        padding: 24px;
        background: #fff;
        border-radius: 26px;
        margin-bottom: 56px;
    }

    .document-card .document-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .document-card .document-item .document-icon {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 60px;
        height: 60px;
        margin-right: 16px;
        border-radius: 50%;
    }

    .document-card .document-item .document-icon.award {
        background: #F4F9EC;
    }

    .document-card .document-item .document-icon.box {
        background: #ECE9FF;
    }

    .document-card .document-item .document-icon.globe {
        background: #ECF7F9;
    }

    .document-card .document-item .document-icon.target {
        background: #FFDDED;
    }

    .document-card .document-item .document-icon.database {
        background: #FFF3E9;
    }

    .document-card .document-item .document-icon img {
        width: 24px;
        height: 24px;
    }

    .document-card .document-item:not(:last-child) {
        padding-bottom: 20px;
        margin-bottom: 20px;
        border-bottom: 1px solid #F7F7FA;
    }

    .document-title {
        font-weight: 600;
        font-size: 16px;
        line-height: 14px;
        margin-top: 2px;
        color: #121F3E;
    }

    .document-desc {
        font-weight: 400;
        font-size: 16px;
        color: #ABB3C4;
        margin: 0;
    }

    .btn-statistics {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #F8F8FA;
    }

    .employee-stat {
        height: 82px;
    }

    .employee-stat .content-desc {
        line-height: 0;
    }

    .employee-stat .statistics-value {
        line-height: 0;
    }

    .employee-card {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 280px;
        background: #fff;
        border-radius: 26px;
        padding: 40px 0;
        margin-bottom: 40px;
    }

    .employee-img {
        width: 70px;
        height: 70px;
    }

    .employee-name {
        font-weight: 600;
        font-size: 18px;
        line-height: 20px;
        /* identical to box height */
        text-align: center;
        color: #121F3E;
    }

    .employee-role {
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;
        /* identical to box height */
        text-align: center;
        color: #ABB3C4;
    }

    .employee-status>* {
        margin: 0 2px;
    }

    .employee-status.verified {
        color: #2ED16C;
    }

    .employee-status.unverified {
        text-decoration-line: underline;
        color: #4640DE;
    }

    .employee-status span,
    .employee-status a {
        font-weight: 400;
        font-size: 14px;
        line-height: 21px;
    }

    .employee-status-image {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
