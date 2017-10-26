<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<nav class="main-nav-bar">
  <a href="/">
    <img class="logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png"/>
  </a>
  <ul class="main-list">
    <li><a href="https://www.centralmidori.com" id="homeLink">Home</a></li>
    <li><a href="https://www.centralmidori.com/products" id="productLink">Products</a></li>
    <li><a href="https://www.centralmidori.com/services" id="servicesLink">Services</a></li>
    <li><a href="https://www.centralmidori.com/manufacturing" id="manufacturingLink">Manufacturing</a></li>
    <li><a href="https://www.centralmidori.com/company" id="companyLink">Company</a></li>
  </ul>
  <div class="phone">
    <i class="fa fa-phone" aria-hidden="true"></i>
    <a href="https://www.centralmidori.com//contact">Contact</a>
  </div>
  <img class="bars" onClick="toggleMobileNav()" src="<?php echo get_template_directory_uri() ?>/assets/images/bars.png"/>
  <div class="slide-menu hidden" id="slideMenu">

  <ul class="main-list">
    <li><a href="https://www.centralmidori.com" id="homeLink">Home</a></li>
    <li><a href="https://www.centralmidori.com/products" id="productLink">Products</a></li>
    <li><a href="https://www.centralmidori.com/services" id="servicesLink">Services</a></li>
    <li><a href="https://www.centralmidori.com/manufacturing" id="manufacturingLink">Manufacturing</a></li>
    <li><a href="https://www.centralmidori.com/company" id="companyLink">Company</a></li>
  </ul>
    <div class="underlay" onClick="toggleMobileNav()"></div>
  </div>
</nav>

<script>
  var toggleMobileNav = function() {
    console.log('BANG');
    var menu = $('#slideMenu');
    if (menu.hasClass('hidden')) {
      menu.addClass('visible');
      menu.removeClass('hidden');
    } else {
      menu.addClass('hidden');
      menu.removeClass('visible');
    }
  }
</script>

<style>
.main-nav-bar {
  background-color: rgba(255, 255, 255, 0.93);
  padding: 10px 40px;
  //position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 999;
  box-sizing: border-box;
  border-bottom: solid 1px #f6f7f9; }
  .main-nav-bar a {
    text-decoration: none; }
  .main-nav-bar .logo {
    height: 45px;
    display: inline-block;
    vertical-align: middle;
    margin-right: 60px; }
  .main-nav-bar .main-list {
    margin: 0;
    display: inline-block;
    vertical-align: middle; }
    .main-nav-bar .main-list li {
      display: inline-block;
      margin: 0 40px 0 0; }
    .main-nav-bar .main-list a {
      text-decoration: none;
      text-transform: uppercase;
      font-size: 14px;
      color: #3a3a3a;
      font-weight: 600;
      position: relative;
      transition: ease all .4s; }
      .main-nav-bar .main-list a:after {
        transition: ease all .4s;
        opacity: 0;
        position: absolute;
        bottom: -22px;
        display: block;
        content: " ";
        height: 4px;
        width: 100%;
        background-color: #d62c1b; }
      .main-nav-bar .main-list a:hover {
        color: #d62c1b; }
        .main-nav-bar .main-list a:hover:after {
          opacity: 1; }
      .main-nav-bar .main-list a.active {
        color: #d62c1b; }
        .main-nav-bar .main-list a.active:after {
          opacity: 1; }
  .main-nav-bar .phone {
    float: right;
    position: relative;
    top: 3px;
    background-color: #2e70a8;
    padding: 10px 15px;
    border-radius: 20px; }
    .main-nav-bar .phone a,
    .main-nav-bar .phone .fa-phone {
      display: inline-block;
      vertical-align: middle;
      color: #fff; }
    .main-nav-bar .phone .fa-phone {
      margin-right: 5px; }
    .main-nav-bar .phone a {
      font-weight: 600;
      cursor: pointer;
      font-size: 16px;
      text-decoration: none; }
  .main-nav-bar .bars {
    display: none; }

@media screen and (min-width: 780px) {
  .slide-menu {
    display: none; } }
@media screen and (max-width: 1100px) {
  .main-nav-bar .logo {
    height: 35px;
    margin-right: 15px; }
  .main-nav-bar .main-list a {
    font-size: 12px; }
  .main-nav-bar .main-list li {
    margin-right: 20px; }
  .main-nav-bar .phone {
    top: 3px; }
  .main-nav-bar .phone a {
    font-size: 14px; } }
@media screen and (max-width: 840px) {
  .main-nav-bar {
    padding-right: 20px; }
    .main-nav-bar .main-list {
      display: none; }
    .main-nav-bar .phone {
      display: none; }
    .main-nav-bar .bars {
      display: block;
      height: 30px;
      float: right;
      position: relative;
      top: 5px; }
    .main-nav-bar .slide-menu {
      position: relative;
      overflow-y: scroll; }
      .main-nav-bar .slide-menu .underlay {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: rgba(77, 77, 77, 0.12);
        cursor: pointer; }
      .main-nav-bar .slide-menu .main-list {
        display: block;
        z-index: 999;
        position: fixed;
        top: 0;
        padding-left: 40px;
        width: 200px;
        background-color: #fff;
        bottom: 0;
        box-shadow: rgba(0, 0, 0, 0.28) 0 0 8px;
        transition: ease all .3s;
        padding-top: 60px; }
        .main-nav-bar .slide-menu .main-list li {
          display: block;
          margin-bottom: 30px; }
      .main-nav-bar .slide-menu.visible {
        opacity: 1; }
        .main-nav-bar .slide-menu.visible .main-list {
          right: 0; }
        .main-nav-bar .slide-menu.visible .underlay {
          display: block; }
      .main-nav-bar .slide-menu.hidden {
        opacity: 0; }
        .main-nav-bar .slide-menu.hidden .underlay {
          display: none; }
        .main-nav-bar .slide-menu.hidden .main-list {
          right: -230px; } }
</style>