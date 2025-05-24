<?php
/**
 * The template for displaying the footer
 */
?>

<footer id="site-footer" class="site-footer">
  <div class="container">
    <div class="footer-inner">

      <div class="footer-left">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-site-name">
          <?php bloginfo( 'name' ); ?>
        </a>
        <p class="footer-credit">
          Tasarım & Geliştirme:
          <a href="https://example.com" target="_blank" rel="noopener">Yurtdışı Basın Ekibi</a>
        </p>
      </div>

      <div class="footer-right">
        <span class="footer-tax-note">Fiyatlarımıza %20 KDV dahil değildir.</span>
        <div class="footer-payments">
          <img src="https://yurtdisibasin.com/wp-content/uploads/2025/04/visa-footer.png"
               alt="Visa" class="payment-icon">
          <img src="https://yurtdisibasin.com/wp-content/uploads/2025/04/master-footer.png"
               alt="Mastercard" class="payment-icon">
        </div>
      </div>

    </div><!-- .footer-inner -->
  </div><!-- .container -->

  <div class="footer-bottom">
    <p>© <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. Tüm hakları saklıdır.</p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>

