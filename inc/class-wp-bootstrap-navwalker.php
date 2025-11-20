<?php
/**
 * WP Bootstrap 5 Navwalker
 * Compatível com menus multinível e dropdowns.
 */

class WP_Bootstrap_Navwalker extends Walker_Nav_Menu
{

    // Inicia nível do submenu
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $submenu_class = ($depth > 0) ? " dropdown-submenu" : "";
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu_class\" >\n";
    }

    // Fecha nível
    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    // Inicia cada item do menu
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : "";

        $classes = empty($item->classes) ? [] : (array) $item->classes;

        $is_dropdown = in_array('menu-item-has-children', $classes);

        $classes[] = "nav-item";

        if ($is_dropdown) {
            $classes[] = "dropdown";
        }

        if ($depth > 0) {
            $classes[] = "dropdown-item";
        }

        $class_names = join(' ', array_filter($classes));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $output .= $indent . '<li' . $class_names . '>';

        // link
        $atts = [];
        $atts['class'] = ($is_dropdown)
            ? 'nav-link dropdown-toggle'
            : 'nav-link';

        if ($depth > 0) {
            $atts['class'] = 'dropdown-item';
        }

        $atts['href'] = !empty($item->url) ? $item->url : '';

        if ($is_dropdown) {
            $atts['data-bs-toggle'] = "dropdown";
            $atts['aria-expanded'] = "false";
            $atts['role'] = "button";
        }

        $attributes = "";

        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = esc_attr($value);
                $attributes .= " $attr=\"$value\"";
            }
        }

        $item_output = $args->before;
        $item_output .= "<a$attributes>";
        $item_output .= $args->link_before . apply_filters("the_title", $item->title, $item->ID) . $args->link_after;
        $item_output .= "</a>";
        $item_output .= $args->after;

        $output .= $item_output;
    }

    // Fecha o item
    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}
