<template>
<div class="row">
  <b-navbar toggleable="xl" type="light" fixed class="col-12 navbar justify-content-center">
    <b-navbar-brand><router-link class="navbar-brand" to="/"><img src="../assets/el_gaucho_logo.png" alt="Logo Brand" class="w-100 mh-100"></router-link>
    </b-navbar-brand>
    <b-navbar-toggle target="nav-collapse" class="border-0"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <ul class="navbar-nav ">
          <li class="nav-item">
            <router-link class="nav-link" to="/">Головна</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/about">Про компанію</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/about">Рослинництво</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/about">Тваринництво</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/about">Новини</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/about">Контакти</router-link>
          </li>
        </ul>
        <ul class="navbar-nav border-left border-right">
          <li class="nav-item">
            <router-link class="nav-link font-weight-bold" to="/about">Зв'язатися</router-link>
          </li>
        </ul>

        <ul class="navbar-nav lang border-right">
          <li class="nav-item">
            <router-link class="nav-link font-weight-bold" to="/about">UA</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/about">EN</router-link>
          </li>
        </ul>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</div>
</template>

<style lang="scss">
  @import "../assets/SCSS/variable";
  @import "../assets/SCSS/main";

  .navbar {
    min-height: $height_nav;
    padding-bottom: 0px !important;
    padding-top: 0px !important;


    .navbar-collapse {
      flex-grow: 0;
    }
    li.nav-item {
      margin-right: 25px;

      a.nav-link {
        color: $color_nav;
        font-size: $font_size_base;
        font-family: $font_family-base;
        line-height: $height_nav;
        padding: 0px 0px;
        outline: none;

        &:hover{
          color: $color_imp;
        }

        &.router-link-active.router-link-exact-active {
          border-bottom: 5px solid $color_imp;
        }
      }
    }
  }
  .navbar-nav.border-right {
    li:first-child{
      margin-left: 25px;
    }
  }
  @media screen and (max-width: 1199px) {
    .navbar.justify-content-center {
      justify-content: space-between !important;
      min-height: 60px;

      .navbar-brand {
        display: inline;}

      img{
        height: 40px;
        width: auto !important;
      }
      ul {
        border: 0px solid transparent !important;
      }
      .lang{
        flex-direction: row;
        li:first-child {
          margin-right: 15px;
        }
      }

      li, li:first-child{
        margin: 0px;

        a.nav-link{
          line-height: 2;

          &.router-link-active.router-link-exact-active{
            border-bottom: 2px solid $color_imp;
            margin-bottom: -2px;
          }
        }
      }
    }
  }
</style>
