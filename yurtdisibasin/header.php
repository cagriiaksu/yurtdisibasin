<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <!-- FontAwesome -->
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<!-- DataTables CSS -->
<link rel="stylesheet"
      href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
<link rel="stylesheet"
      href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header -->
<header>
    <div class="container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Ana Sayfa">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo '<img src="' . get_template_directory_uri() . '/assets/img/logo.png" alt="' . get_bloginfo('name') . '" width="250" height="100">';
                }
                ?>
            </a>
        </div>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => function() {
                    echo '<ul>
                        <li><a href="#"><i class="fas fa-tags"></i> Kategoriler</a></li>
                        <li><a href="#"><i class="fas fa-globe"></i> Tüm Siteler</a></li>
                        <li><a href="#"><i class="fas fa-box"></i> Paketler</a></li>
                        <li><a href="#">FOOTER</a></li>
                    </ul>';
                },
            ));
            ?>
        </nav>
        <div class="mobile-menu-toggle" aria-label="Mobil Menü">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<div class="mobile-menu">
    <div class="mobile-menu-header">
        <div class="logo">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<img src="' . get_template_directory_uri() . '/assets/img/logo.png" alt="' . get_bloginfo('name') . '" width="120" height="40">';
            }
            ?>
        </div>
        <button class="mobile-menu-close" aria-label="Menüyü Kapat">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <nav>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_id'        => 'mobile-menu',
            'container'      => false,
            'fallback_cb'    => function() {
                echo '<ul>
                    <li><a href="#"><i class="fas fa-tags"></i> Kategoriler</a></li>
                    <li><a href="#"><i class="fas fa-globe"></i> Tüm Siteler</a></li>
                    <li><a href="#"><i class="fas fa-box"></i> Paketler</a></li>
                    <li><a href="#">FOOTER</a></li>
                </ul>';
            },
        ));
        ?>
    </nav>
</div>
