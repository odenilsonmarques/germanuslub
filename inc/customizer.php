

<?php 

function customize_germanus_lub($wp_customize)
{


// Inicio------------- Section hero-------------------
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title'       => __('Configuração da seção hero do site', 'your-text'),
            'description' => __('Configure o conteudo da seção hero do site', 'your-text'),
            'priority'    => 30,
        )
    );

    //título
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label'    => __('Título do seção', 'your-textdomain'),
            'section'  => 'sec_hero',
            'type'     => 'text',
        )
    );

    //subtitle
    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );
    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label'    => __('Subtitulo da seção', 'your-textdomain'),
            'section'  => 'sec_hero',
            'type'     => 'textarea',
        )
    );

     // texto botão
     $wp_customize->add_setting(
        "set_hero_text_button",
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        "set_hero_text_button",
        array(
            'label'   => __("Texto do botao", 'your-textdomain'),
            'section' => 'sec_hero',
            'type'    => 'text',
        )
    );


    // Link
    $wp_customize->add_setting(
        "set_hero_button_link",
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        "set_hero_button_link",
        array(
            'label'   => __("Link do Botão", 'your-textdomain'),
            'section' => 'sec_hero',
            'type'    => 'url',
        )
    );

      //imagem
      $wp_customize->add_setting(
        'set_hero_image',
        array(
            'default'           => '', // Defina um valor padrão, se necessário
            'sanitize_callback' => 'esc_url_raw', // Sanitização da URL da imagem
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'set_about_image',
            array(
                'label'      => __('Defina uma imagem', 'your-textdomain'),
                'section'    => 'sec_hero',
                'settings'   => 'set_hero_image',
                'description' => __('Carregue uma imagem para a seção', 'your-textdomain'),
            )
        )
    );
}

add_action('customize_register', 'customize_germanus_lub');