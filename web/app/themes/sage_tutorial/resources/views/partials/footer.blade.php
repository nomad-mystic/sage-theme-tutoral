<footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
  @php wp_nav_menu([
	  'theme_location' => 'footer_navigation',
	  'menu_class' => 'nav',
	])
  @endphp
</footer>
