<?php 
// Custom Heading
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Heading", 'archi'),
   "base"      => "heading",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Number", 'archi'),
         "param_name"=> "number",
         "value"     => "",
         "description" => __("Add Number", 'archi')
      ),
      array(
         "type"      => "textarea",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text", 'archi'),
         "param_name"=> "text",
         "value"     => "",
         "description" => __("Add Text", 'archi')
      ),
      array(
         'type' => 'vc_link',
          "heading" => __("URL (Link)", 'archi'),
          "param_name" => "linkbox",         
          "description" => __("Add link to custom heading.", 'archi')
      ),   
      array(
        "type" => "dropdown",
        "heading" => __('Element Tag', 'archi'),
        "param_name" => "tag",
        "value" => array(
                     __('Select Tag', 'archi') => '',
                     __('h1', 'archi') => 'h1',
                     __('h2', 'archi') => 'h2',
                     __('h3', 'archi') => 'h3',  
                     __('h4', 'archi') => 'h4',
                     __('h5', 'archi') => 'h5',
                     __('h6', 'archi') => 'h6',  
                     __('p', 'archi')  => 'p',
                     __('div', 'archi') => 'div',
                    ),

        "description" => __("Select element tag.", 'archi'),      
      ),
      array(
        "type" => "dropdown",
        "heading" => __('Text align', 'archi'),
        "param_name" => "align",
        "value" => array(                      
                     __('left', 'archi') => 'left',
                     __('right', 'archi') => 'right',  
                     __('center', 'archi') => 'center',
                     __('justify', 'archi') => 'justify',                  
                    ),
        "description" => __("Select text alignment.", 'archi'),      
      ),
      array(
         "type"      => "textfield",
         "heading"   => __("Font size", 'archi'),
         "param_name"=> "size",
         "value"     => "",
         "description" => __("Enter font size.", 'archi')
      ),
      array(
         "type"      => "textfield",
         "heading"   => __("Line height", 'archi'),
         "param_name"=> "line_height",
         "value"     => "",
         "description" => __("Enter line height.", 'archi')
      ),
      array(
         "type"      => "colorpicker",
         "heading"   => __("Text color", 'archi'),
         "param_name"=> "color",
         "value"     => "",
         "description" => __("Select heading color.", 'archi')
      ),
      array(
         "type"      => "textfield",         
         "heading"   => __("Element ID", 'archi'),
         "param_name"=> "el_id",
         "value"     => "",
         "description" => __('Enter element ID (Note: make sure it is unique and valid according to <a href="http://www.w3schools.com/tags/att_global_id.asp" target="_blank">w3c specification</a>).', 'archi')
      ),
      array(
         "type"      => "textfield",
         "heading"   => __("Extra class name", 'archi'),
         "param_name"=> "class",
         "value"     => "",
         "description" => __("Style particular content element differently - add a class name and refer to it in custom CSS.", 'archi')
      ),
    )));
}

// OT Line Solid
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Line Solid", 'archi'),
   "base"      => "line_solid",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => "Icon",
        "param_name" => "icon",
        "value" => "",
        "description" => __("EX: circle.Find here: <a target='_blank' href='https://fontawesome.com/v4.7.0/icons/'>https://fontawesome.com/v4.7.0/icons/</a>", 'archi'),        
      ),
      array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => __('Line Style Color', 'archi'),
        "param_name" => "style",
        "value" => array(         
                      __('None', 'archi') => 'none',              
                      __('Line Light', 'archi') => 'line_light',
                      __('Line Dark', 'archi') => 'line_dark',
                    ),
        "description" => __("Select line style", 'archi'),      
      ),
      array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => __('Separator Style', 'archi'),
        "param_name" => "line_type",
        "value" => array(         
                      __('None', 'archi') => 'none',              
                      __('Line Bold', 'archi') => 'bold',                      
                    ),
        "description" => __("Select Separator Style", 'archi'),      
      ),
    )));
}

// OT Button
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Button", 'archi'),
   "base" => "button",
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Text", 'archi'),
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Add Your Button Text", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Link", 'archi'),
         "param_name" => "btnlink",
         "value" => '',
         "description" => __("Add Link Url, Empty do not show.", 'archi')
      ), 
      array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => "Custom link target",
        "param_name" => "custom_links_target",
        "value" => array(
                   __('Same window', 'archi') => '_self',
                   __('New window', 'archi') => '_blank', 
                   __('The parent frame', 'archi') => '_parent',
                   __('The full body of the window', 'archi') => '_top',
                  ),
        "description" => __('Select link target, see more <a href="https://www.w3schools.com/tags/att_a_target.asp" target="_blank">w3c specification</a>', 'archi')
      ), 
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Class Extra", 'archi'),
         "param_name"=> "class",
         "value"     => "",
         "description" => __("Class extra for style", 'archi')
      ), 
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ),      
    )));
}

// OT Buttons 2
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Button 2", 'archi'),
   "base" => "button2",
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(
      array(
         'type' => 'vc_link',
          "heading" => __("Link Button", 'archi'),
          "param_name" => "linkbox",         
          "description" => __("Add your link to button.", 'archi')
      ),          
      array(
          "type"      => "textfield",
          "holder"    => "div",
          "class"     => "",
          "heading"   => __("Class Extra", 'archi'),
          "param_name"=> "class",
          "value"     => "",
          "description" => __("Class extra for style", 'archi')
      ), 
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ),         
    )));
}

// Featured Boxes
if(function_exists('vc_map')){
   vc_map(array(
         "name"      => __("OT Featured Boxes", 'archi'),
         "base"      => "ot_featured_boxes",
         "class"     => "",
         "icon" => "icon-st",
         "category" => __( "Archi Elements", 'archi'),
         "params"    => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'value' => '',
               'heading' => 'Title',
               'param_name' => 'simple_textfield',
            ),         
            array(
               "type" => "dropdown",
               "holder" => "div",
               "class" => "",
               "heading" => __("Select Columns.", 'archi'),
               "param_name" => "columns",
               "value" => array(                                      
                           __('Columns 4', 'archi') => 4,
                           __('Columns 3', 'archi') => 3,
                           __('Columns 2', 'archi') => 2,
                          ),
               "description" => __("Select number columns for show.", 'archi')
            ),   
            // params group
            array(
                'type' => 'param_group',
                'heading' => 'Add Featured Boxes (multiple field)',
                'value' => '',
                'param_name' => 'titles',
                // Note params is mapped inside param-group:
                'params' => array(
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Enter your title(multiple field)',
                        'param_name' => 'title',
                        "value" => "",
                        "description" => __("Add Your Title Text", 'archi')
                     ),
                     array(
                        'type' => 'textarea',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Enter your desc(multiple field)',
                        'param_name' => 'desc',
                        "value" => "",
                        "description" => __("Add Desc Content Text", 'archi')
                     ),
                     array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => __("Label Button", 'archi'),
                        "param_name" => "btntext",
                        "value" => "",
                        "description" => __("Text display in button.", 'archi')
                     ),
                     array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => __("Link Button", 'archi'),
                        "param_name" => "btnlink",
                        "value" => "",
                        "description" => __("Link in button.", 'archi')
                     ),
                     array(
                        "type" => "attach_image",
                        "holder" => "div",
                        "class" => "",
                        "heading" => __("Background image", 'archi'),
                        "param_name" => "bgimage",
                        "value" => "",
                        "description" => __("Upload background image", 'archi')
                     ),
                  )                
            ),              
            array(
              "type" => "dropdown",
              "holder" => "div",
              "class" => "",
              "heading" => __("Link Target", 'archi'),
              "param_name" => "target",
              "value" => array(                                      
                         __('Same window', 'archi') => '_self',
                         __('New window', 'archi') => '_blank',
                        ),
              "description" => __("Select target, use for all button link.", 'archi')
            ), 
            array(
              "type" => "dropdown",
              "holder" => "div",
              "class" => "",
              "heading" => __("Animation", 'archi'),
              "param_name" => "animation",
              "value" => array(                 
                        __('Enable', 'archi') => 'enable',                     
                        __('Disable', 'archi') => 'disable',                         
                        ),
              "description" => __("Enable/Disable Animation?", 'archi')
            ), 
            array(
              "type"      => "textfield",
              "holder"    => "div",
              "class"     => "",
              "heading"   => __("Class Extra", 'archi'),
              "param_name"=> "class",
              "value"     => "",
              "description" => __("Class extra for style", 'archi')
            ), 
        )
    )
);
}

// Featured Boxes 2
if(function_exists('vc_map')){
   vc_map(array(
         "name"      => __("OT Featured Boxes 2", 'archi'),
         "base"      => "ot_featured_boxes2",
         "class"     => "",
         "icon" => "icon-st",
         "category" => __( "Archi Elements", 'archi'),
         "params"    => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'value' => '',
               'heading' => 'Title',
               'param_name' => 'simple_textfield',
            ),
            array(
               "type" => "dropdown",
               "holder" => "div",
               "class" => "",
               "heading" => __("Select Columns.", 'archi'),
               "param_name" => "columns",
               "value" => array(                                      
                           __('Columns 4', 'archi') => 4,
                           __('Columns 3', 'archi') => 3,
                           __('Columns 2', 'archi') => 2,
                          ),
               "description" => __("Select number columns for show.", 'archi')
            ),  
            // params group
            array(
                'type' => 'param_group',
                'heading' => 'Add Featured Boxes(multiple field)',
                'value' => '',
                'param_name' => 'titles',
                // Note params is mapped inside param-group:
                'params' => array(
                    array(
                        'type' => 'textfield',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Enter your title(multiple field)',
                        'param_name' => 'title',
                        "value" => "",
                        "description" => __("Add Your Title Text", 'archi')
                     ),
                     array(
                        'type' => 'textarea',
                        "holder" => "div",
                        "class" => "",
                        'heading' => 'Enter your desc(multiple field)',
                        'param_name' => 'desc',
                        "value" => "",
                        "description" => __("Add Desc Content Text", 'archi')
                     ),
                     array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => __("Label Button", 'archi'),
                        "param_name" => "btntext",
                        "value" => "",
                        "description" => __("Text display in button.", 'archi')
                     ),
                     array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => __("Link Button", 'archi'),
                        "param_name" => "btnlink",
                        "value" => "",
                        "description" => __("Link in button.", 'archi')
                     ),
                     array(
                        "type" => "attach_image",
                        "holder" => "div",
                        "class" => "",
                        "heading" => __("Background image", 'archi'),
                        "param_name" => "bgimage",
                        "value" => "",
                        "description" => __("Upload background image", 'archi')
                     ),
                  )                
            ),
            array(
               "type" => "dropdown",
               "holder" => "div",
               "class" => "",
               "heading" => __("Link Target", 'archi'),
               "param_name" => "target",
               "value" => array(                                      
                           __('Same window', 'archi') => '_self',
                           __('New window', 'archi') => '_blank',
                          ),
               "description" => __("Select target, use for all button link.", 'archi')
            ),            
            array(
              "type"      => "textfield",
              "holder"    => "div",
              "class"     => "",
              "heading"   => __("Class Extra", 'archi'),
              "param_name"=> "class",
              "value"     => "",
              "description" => __("Class extra for style", 'archi')
            ), 
            array(
              "type" => "dropdown",
              "holder" => "div",
              "class" => "",
              "heading" => __("Animation", 'archi'),
              "param_name" => "animation",
              "value" => array(                 
                        __('Enable', 'archi') => 'enable',                     
                        __('Disable', 'archi') => 'disable',                         
                        ),
              "description" => __("Enable/Disable Animation?", 'archi'),
              "group" => __("Animation Options", 'archi')
            ), 
            array(
              "type"      => "textfield",
              "holder"    => "div",
              "class"     => "",
              "heading"   => __("Animation Time Delay", 'archi'),
              "param_name"=> "time_delay",
              "value"     => "",
              "description" => __("Animation Time Delay between boxes, ex: 0.25, 0.5, 1", 'archi'),
              "group" => __("Animation Options", 'archi')
            ), 
        )
    )
);
}

// OT Home HTML5 Video
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home HTML5 Video", 'archi'),
   "base"      => "home_video",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(  
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add text slider(multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Enter your text slider',
               'param_name' => 'title',
               "value" => "",
               "description" => __("Add your text slider (multiple field)", 'archi')
            )              
         )                
      ),        
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Background Video",
         "param_name" => "bgvideo",
         "value" => "",
         "description" => __("Background Video", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Video Link",
         "param_name" => "video1",
         "value" => "",
         "description" => __("Video Link mp4", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Video Link",
         "param_name" => "video2",
         "value" => "",
         "description" => __("Video Link webm", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Add Your Text SubTitle", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link Button",
         "param_name" => "btnlink",
         "value" => "",
         "description" => __("Add Link Url, Empty do not show.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text Button",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Text Button", 'archi')
      ),
      array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => "Custom link target",
        "param_name" => "custom_links_target",
        "value" => array(
                   __('Same window', 'archi') => '_self',
                   __('New window', 'archi') => '_blank', 
                   __('The parent frame', 'archi') => '_parent',
                   __('The full body of the window', 'archi') => '_top',
                  ),
        "description" => __('Select link target, see more <a href="https://www.w3schools.com/tags/att_a_target.asp" target="_blank">w3c specification</a>', 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Video Background Overlay",
         "param_name" => "video_overlay",
         "value" => array(                     
                     __('Overlay', 'archi') => 'overlay',
                     __('Dotted', 'archi') => 'dotted',                       
                     __('None', 'archi') => 'none',                   
                    ),
         "description" => __("Select video background overlay.", 'archi')
      ),  
    )));
}

// OT Home Parallax
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Parallax", 'archi'),
   "base"      => "home_parallax",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(  
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add text slider(multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Enter your text slider',
               'param_name' => 'title',
               "value" => "",
               "description" => __("Add your text slider (multiple field)", 'archi')
            )              
         )                
      ),             
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Add Your Text SubTitle", 'archi')
      ),
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Big Text color", 'archi'),
        "param_name"=> "btextcolor",
        "value"     => "",
        "description" => __("Select big text color.", 'archi'),
      ),      
      array(
          "type"      => "colorpicker",
          "holder"    => "div",
          "class"     => "",
          "heading"   => __("Small Text color", 'archi'),
          "param_name"=> "stextcolor",
          "value"     => "",
          "description" => __("Select small text color.", 'archi'),
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link Button",
         "param_name" => "btnlink",
         "value" => "",
         "description" => __("Add Link Url, Empty do not show.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text Button",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Add Your Button Text", 'archi')
      ), 
      array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => "Custom link target",
        "param_name" => "custom_links_target",
        "value" => array(
                   __('Same window', 'archi') => '_self',
                   __('New window', 'archi') => '_blank', 
                   __('The parent frame', 'archi') => '_parent',
                   __('The full body of the window', 'archi') => '_top',
                  ),
        "description" => __('Select link target, see more <a href="https://www.w3schools.com/tags/att_a_target.asp" target="_blank">w3c specification</a>', 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button Extra class name",
         "param_name" => "btn_extra_class",
         "value" => "",
         "description" => __("Style particular content element differently - add a class name and refer to it in custom CSS.", 'archi')
      ),                       
    )));
}

// OT Home Parallax 2 - use for Home Minimal
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Parallax 2", 'archi'),
   "base"      => "home_parallax2",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(  
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Logo",
         "param_name" => "logo",
         "value" => "",
         "description" => __("Upload your logo.", 'archi')
      ), 
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add text slider(multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Enter your text slider',
               'param_name' => 'title',
               "value" => "",
               "description" => __("Add your text slider (multiple field)", 'archi')
            )              
         )                
      ),  
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Text color", 'archi'),
        "param_name"=> "textcolor",
        "value"     => "",
        "description" => __("Select heading color.", 'archi'),
      ),                 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link Button",
         "param_name" => "btnlink",
         "value" => "",
         "description" => __("Add Link Url, Empty do not show button.", 'archi')
      ),                                  
    )));
}

// Home Text Static
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Text Static", 'archi'),
   "base"      => "home_text",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("SubTitle text", 'archi')
      ),             
      array(
          "type"      => "colorpicker",
          "holder"    => "div",
          "class"     => "",
          "heading"   => __("Text color for SubTitle", 'archi'),
          "param_name"=> "btextcolor",
          "value"     => "",
          "description" => __("Select text color for SubTitle.", 'archi'),
      ),   
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Text color for Title", 'archi'),
        "param_name"=> "stextcolor",
        "value"     => "",
        "description" => __("Select text color for Title.", 'archi'),
      ),                
    )));
}

// Home Parallax image Landing
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Image Landing", 'archi'),
   "base"      => "home_landing",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(  
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "logo",
         "param_name" => "logo",
         "value" => "",
         "description" => __("Upload your logo.", 'archi')
      ),  
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => __("Add your title", 'archi')
      ),       
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Add your subtitle", 'archi')
      ),
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Big Text color", 'archi'),
        "param_name"=> "btextcolor",
        "value"     => "",
        "description" => __("Select big text color.", 'archi'),
      ),      
      array(
          "type"      => "colorpicker",
          "holder"    => "div",
          "class"     => "",
          "heading"   => __("Small Text color", 'archi'),
          "param_name"=> "stextcolor",
          "value"     => "",
          "description" => __("Select small text color.", 'archi'),
      ),
      array(
        'type' => 'vc_link',
         "heading" => __("Link Button", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add your link to button.", 'archi')
      ),   
    )));
}

// Home Parallax Multi Purpose
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Image MultiPurpose", 'archi'),
   "base"      => "home_multipurpose",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(          
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => __("Add your title", 'archi')
      ),       
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Add your subtitle", 'archi')
      ),
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Big Text color", 'archi'),
        "param_name"=> "btextcolor",
        "value"     => "",
        "description" => __("Select big text color.", 'archi'),
      ),      
      array(
          "type"      => "colorpicker",
          "holder"    => "div",
          "class"     => "",
          "heading"   => __("Small Text color", 'archi'),
          "param_name"=> "stextcolor",
          "value"     => "",
          "description" => __("Select small text color.", 'archi'),
      ), 
      array(
        'type' => 'vc_link',
         "heading" => __("Link Button", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add your link to button.", 'archi')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title Extra class name",
         "param_name" => "title_extraclass",
         "value" => "",
         "description" => __("Style particular content element differently - add a class name and refer to it in custom CSS.", 'archi'),
         "group" => __("Style Options", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle Extra class name",
         "param_name" => "subtitle_extraclass",
         "value" => "",
         "description" => __("Style particular content element differently - add a class name and refer to it in custom CSS.", 'archi'),
         "group" => __("Style Options", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button Extra class name",
         "param_name" => "btn_extraclass",
         "value" => "",
         "description" => __("Style particular content element differently - add a class name and refer to it in custom CSS.", 'archi'),
         "group" => __("Style Options", 'archi')
      ),  
    )));
}

// Home Landing Product
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Landing Product", 'archi'),
   "base"      => "home_landing_product",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(  
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "logo",
         "param_name" => "logo",
         "value" => "",
         "description" => __("Upload your logo.", 'archi')
      ),  
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Add your subtitle", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => __("Add your title", 'archi')
      ),
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Big Text color", 'archi'),
        "param_name"=> "btextcolor",
        "value"     => "",
        "description" => __("Select big text color.", 'archi'),
      ),      
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Small Text color", 'archi'),
        "param_name"=> "stextcolor",
        "value"     => "",
        "description" => __("Select small text color.", 'archi'),
      ),         
      array(
        'type' => 'vc_link',
         "heading" => __("Link Button", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add your link to button.", 'archi')
      ),   
    )));
}

// Home Portfolio Minimal
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Home Portfolio Minimal", 'archi'),
   "base" => "portfolio_minimal",
   "class" => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params" => array(         
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add text slider(multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Enter your small text slider',
               'param_name' => 'stitle',
               "value" => "",
               "description" => __("Add your small text slider (multiple field)", 'archi')
            ),
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Enter your big text slider',
               'param_name' => 'title',
               "value" => "",
               "description" => __("Add your big text slider (multiple field)", 'archi')
            ),              
         )                
      ), 
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Text color", 'archi'),
        "param_name"=> "textcolor",
        "value"     => "",
        "description" => __("Select heading color.", 'archi'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Extra class name",
         "param_name" => "extraclass",
         "value" => "",
         "description" => __("Style particular content element differently - add a class name and refer to it in custom CSS.", 'archi')
      ),         
    )));
}

// Home Video Landing
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Video Landing", 'archi'),
   "base"      => "video_landing",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(  
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "logo",
         "param_name" => "logo",
         "value" => "",
         "description" => __("Upload your logo.", 'archi')
      ),        
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => __("Add your title", 'archi')
      ),       
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Add your subtitle", 'archi')
      ),
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Big Text color", 'archi'),
        "param_name"=> "btextcolor",
        "value"     => "",
        "description" => __("Select big text color.", 'archi'),
      ),      
      array(
          "type"      => "colorpicker",
          "holder"    => "div",
          "class"     => "",
          "heading"   => __("Small Text color", 'archi'),
          "param_name"=> "stextcolor",
          "value"     => "",
          "description" => __("Select small text color.", 'archi'),
      ),   
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Background Video",
         "param_name" => "bgvideo",
         "value" => "",
         "description" => __("Background Video", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "MP4 Video Link",
         "param_name" => "mp4",
         "value" => "",
         "description" => __("Video Link mp4", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "WEBM Video Link",
         "param_name" => "webm",
         "value" => "",
         "description" => __("Video Link webm", 'archi')
      ), 
      array(
        'type' => 'vc_link',
         "heading" => __("Link Button", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add your link to button.", 'archi')
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Video Background Overlay",
         "param_name" => "video_overlay",
         "value" => array(                     
                     __('Overlay', 'archi') => 'overlay',
                     __('Dotted', 'archi') => 'dotted',                       
                     __('None', 'archi') => 'none',                   
                    ),
         "description" => __("Select video background overlay.", 'archi')
      ),  
    )));
}

// Home Moving Background
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Home Moving Background", 'archi'),
   "base" => "movingbg",
   "class" => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params" => array(         
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add text slider(multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Enter your text slider',
               'param_name' => 'title',
               "value" => "",
               "description" => __("Add your text slider (multiple field)", 'archi')
            )              
         )                
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Text", 'archi')
      ),   
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Big Text color", 'archi'),
        "param_name"=> "btextcolor",
        "value"     => "",
        "description" => __("Select big text color.", 'archi'),
      ),      
      array(
          "type"      => "colorpicker",
          "holder"    => "div",
          "class"     => "",
          "heading"   => __("Small Text color", 'archi'),
          "param_name"=> "stextcolor",
          "value"     => "",
          "description" => __("Select small text color.", 'archi'),
      ),    
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => __("Background Image Moving", 'archi'),
         "param_name" => "bgmoving",
         "value" => "",
         "description" => __("Upload Background Image Moving, Recomended Size: 3830 x 800 (max-width: 5000 and max-height: 800)", 'archi')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Time delay",
         "param_name" => "time",
         "value" => "",
         "description" => __("Add your time delay, eg: 10 or 50", 'archi')
      ),   
      array(
        'type' => 'vc_link',
         "heading" => __("Button Link", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add link to button.", 'archi')
      ),   
    )));
}

// OT Home Youtube Video
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Home Youtube Video", 'archi'),
   "base" => "home_youtubevideo",
   "class" => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Enter Your ID YouTube Video", 'archi'),
         "param_name" => "video_link",
         "value" => "",
         "description" => __("Your ID YouTube Video, Example: <code>5ynGpsRtNHw</code> https://www.youtube.com/embed/<code>5ynGpsRtNHw</code> or https://www.youtube.com/watch?v=<code>5ynGpsRtNHw</code>, Please only Your ID Video and not all link video.", 'archi')
      ),    
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add text slider(multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Enter your text slider',
               'param_name' => 'title',
               "value" => "",
               "description" => __("Add your text slider (multiple field)", 'archi')
            )              
         )                
      ),            
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Text", 'archi')
      ),  
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Big Text color", 'archi'),
        "param_name"=> "btextcolor",
        "value"     => "",
        "description" => __("Select big text color.", 'archi'),
      ),      
      array(
          "type"      => "colorpicker",
          "holder"    => "div",
          "class"     => "",
          "heading"   => __("Small Text color", 'archi'),
          "param_name"=> "stextcolor",
          "value"     => "",
          "description" => __("Select small text color.", 'archi'),
      ),   
      array(
        'type' => 'vc_link',
         "heading" => __("Button", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add text, link for button.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Video Background Overlay",
         "param_name" => "video_overlay",
         "value" => array(                     
                     __('Overlay', 'archi') => 'overlay',
                     __('Dotted', 'archi') => 'dotted',                       
                     __('None', 'archi') => 'none',                   
                    ),
         "description" => __("Select video background overlay.", 'archi')
      ),      
      array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => __("AutoPlay", 'archi'),
        "param_name" => "autoplay",
        "value" => array(                    
          __('On', 'archi') => 'true', 
          __('Off', 'archi') => 'false',                      
        ),
        "description" => __("On/Off video autoPlay, default: The video autoplay", 'archi'),
        "group" => __("Video Options", 'archi'),
      ),
      array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => __("Sound", 'archi'),
        "param_name" => "muted",
        "value" => array(                    
          __('On', 'archi') => 'false', 
          __('Off', 'archi') => 'true',                      
        ),
        "description" => __("On/Off video muted, default: The sound has been turned on", 'archi'),
        "group" => __("Video Options", 'archi'),
      ),
      array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => __("Video Looping", 'archi'),
        "param_name" => "video_loop",
        "value" => array(            
          __('On', 'archi') => 'true',        
          __('Off', 'archi') => 'false',                                 
        ),
        "description" => __("On/Off video looping, default: The video looping has been turned on.", 'archi'),
        "group" => __("Video Options", 'archi'),
      ),
    )));
}

// Home Let It Snow
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Snowy", 'archi'),
   "base"      => "home_letitsnow",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array( 
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => __("Logo", 'archi'),
         "param_name" => "logo",
         "value" => "",
         "description" => __("Upload logo", 'archi')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => __("Add your title", 'archi')
      ),               
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Add your subtitle", 'archi')
      ),
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Big Text color", 'archi'),
        "param_name"=> "btextcolor",
        "value"     => "",
        "description" => __("Select big text color.", 'archi'),
      ),      
      array(
          "type"      => "colorpicker",
          "holder"    => "div",
          "class"     => "",
          "heading"   => __("Small Text color", 'archi'),
          "param_name"=> "stextcolor",
          "value"     => "",
          "description" => __("Select small text color.", 'archi'),
      ),  
      array(
         "type" => "vc_link",
         "heading" => "Button Link",
         "param_name" => "linkbox",
         "description" => __("Add link to button, empty do not show.", 'archi')
      ),                           
    )));
}

// Home Profession
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Home Profession", 'archi'),
   "base"      => "home_profession",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(         
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => __("Add your title", 'archi')
      ),               
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => __("Add your subtitle", 'archi')
      ),
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Big Text color", 'archi'),
        "param_name"=> "btextcolor",
        "value"     => "",
        "description" => __("Select big text color.", 'archi'),
      ),      
      array(
          "type"      => "colorpicker",
          "holder"    => "div",
          "class"     => "",
          "heading"   => __("Small Text color", 'archi'),
          "param_name"=> "stextcolor",
          "value"     => "",
          "description" => __("Select small text color.", 'archi'),
      ),  
      array(
         "type" => "vc_link",
         "heading" => "Button Link",
         "param_name" => "linkbox",
         "description" => __("Add link to button, empty do not show.", 'archi')
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Button extra class name", 'archi'),
         "param_name"=> "extraclass",
         "value"     => "",
         "description" => __("Style particular content element differently - add a class name and refer to it in custom CSS.", 'archi')
      ),                     
    )));
}

// OT Text Slider Box
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Text Slider Box", 'archi'),
   "base" => "text_slider_box",
   "class" => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params" => array(   
      array(
        "type" => "attach_image",
        "holder" => "div",
        "class" => "",
        "heading" => __("Upload Logo", 'archi'),
        "param_name" => "logo",
        "value" => "",
        "description" => __("Upload your logo", 'archi')
      ),      
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add text slider(multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Enter your text slider',
               'param_name' => 'title',
               "value" => "",
               "description" => __("Add your text slider (multiple field)", 'archi')
            ),              
         )                
      ), 
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Text color", 'archi'),
        "param_name"=> "textcolor",
        "value"     => "",
        "description" => __("Select heading color.", 'archi'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Extra class name",
         "param_name" => "extraclass",
         "value" => "",
         "description" => __("Style particular content element differently - add a class name and refer to it in custom CSS.", 'archi')
      ),         
    )));
}

// OT Before After Box
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Before After Box", 'archi'),
   "base" => "ot_before_after",
   "class" => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params" => array(             
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add text slider(multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
              "type" => "attach_image",
              "holder" => "div",
              "class" => "",
              "heading" => __("Upload Before Image", 'archi'),
              "param_name" => "beforeimg",
              "value" => "",
              "description" => __("Upload one image for the before image.", 'archi')
            ), 
            array(
              "type" => "attach_image",
              "holder" => "div",
              "class" => "",
              "heading" => __("Upload After Image", 'archi'),
              "param_name" => "afterimg",
              "value" => "",
              "description" => __("Upload one image for the after image.", 'archi')
            ), 
            array(
              'type' => 'textfield',
              "holder" => "div",
              "class" => "",
              'heading' => 'Enter your title (Conten Box)',
              'param_name' => 'title',
              "value" => "",
              "description" => __("Add Your Title Text", 'archi')
            ),
            array(
              'type' => 'textarea',
              "holder" => "div",
              "class" => "",
              'heading' => 'Enter your description (Conten Box)',
              'param_name' => 'desc',
              "value" => "",
              "description" => __("Add Description Text", 'archi')
            ), 
            array(
              'type' => 'textfield',
              "holder" => "div",
              "class" => "",
              'heading' => 'Button text (Conten Box)',
              'param_name' => 'btntext',
              "value" => "",
              "description" => __("Add Your Button Text", 'archi')
            ),
            array(
              'type' => 'textfield',
              "holder" => "div",
              "class" => "",
              'heading' => 'Button link (Conten Box)',
              'param_name' => 'btnlink',
              "value" => "",
              "description" => __("Add Your Button Link", 'archi')
            ),
            array(
              "type" => "dropdown",
              "holder" => "div",
              "class" => "",
              "heading" => __("Layout Style", 'archi'),
              "param_name" => "layoutstyle",
              "value" => array(                    
                __('Image on left Box', 'archi') => 'imgleft', 
                __('Image on right Box', 'archi') => 'imgright',                      
              ),
              "description" => __("You can use one of the preset effects to the box.", 'archi'),
              "group" => __("Design Options", 'archi'),
            ),
         )                
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Before Label",
         "param_name" => "before_label",
         "value" => "",
         "description" => __("Set a custom before label.", 'archi'),
         "group" => __("Data Settings", 'archi'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "After Label",
         "param_name" => "after_label",
         "value" => "",
         "description" => __("Set a custom after label.", 'archi'),
         "group" => __("Data Settings", 'archi'),
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select % before image is visible?", 'archi'),
         "param_name" => "imgbefore_visible",
         "value" => array(   
            __('Default', 'archi') => 'none',
            __('30%', 'archi') => '0.3', 
            __('40%', 'archi') => '0.4', 
            __('50%', 'archi') => '0.5', 
            __('60%', 'archi') => '0.6', 
            __('70%', 'archi') => '0.7',                       
          ),
         "description" => __("How much of the before image is visible when the page loads?", 'archi'),
         "group" => __("Data Settings", 'archi'),
      ),
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Background color", 'archi'),
        "param_name"=> "bgcolor",
        "value"     => "",
        "description" => __("Choose background color for box, default: rgba(20,20,20,.9).", 'archi'),
        "group" => __("Design Options", 'archi'),
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("CSS Animation", 'archi'),
         "param_name" => "animate",
         "value" => array(   
            __('None', 'archi') => 'none', 
            __('Fade In Up', 'archi') => 'fadeInUp', 
            __('Fade In Down', 'archi') => 'fadeInDown', 
            __('Fade In', 'archi') => 'fadeIn', 
            __('Fade In Left', 'archi') => 'fadeInLeft',  
            __('Fade In Right', 'archi') => 'fadeInRight',                     
          ),
         "description" => __("You can use one of the preset effects to the box.", 'archi'),
         "group" => __("Design Options", 'archi'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Empty Space: Height",
         "param_name" => "space",
         "value" => "",
         "description" => __("Enter empty space height (Note: CSS measurement units allowed), ex: 60px.", 'archi'),
         "group" => __("Design Options", 'archi'),
      ),     
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Extra class name",
         "param_name" => "extraclass",
         "value" => "",
         "description" => __("Style particular content element differently - add a class name and refer to it in custom CSS.", 'archi'),
      ),         
    )));
} 

// OT Before After Slider
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Before After Slider", 'archi'),
   "base" => "ot_before_after_slider",
   "class" => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params" => array(             
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add text slider(multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
              "type" => "attach_image",
              "holder" => "div",
              "class" => "",
              "heading" => __("Upload Before Image", 'archi'),
              "param_name" => "beforeimg",
              "value" => "",
              "description" => __("Upload one image for the before image.", 'archi')
            ), 
            array(
              "type" => "attach_image",
              "holder" => "div",
              "class" => "",
              "heading" => __("Upload After Image", 'archi'),
              "param_name" => "afterimg",
              "value" => "",
              "description" => __("Upload one image for the after image.", 'archi')
            ), 
         )                
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Before Label",
         "param_name" => "before_label",
         "value" => "",
         "description" => __("Set a custom before label.", 'archi'),
         "group" => __("Data Settings", 'archi'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "After Label",
         "param_name" => "after_label",
         "value" => "",
         "description" => __("Set a custom after label.", 'archi'),
         "group" => __("Data Settings", 'archi'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Next Text",
         "param_name" => "next_text",
         "value" => "",
         "description" => __("Set a custom text for slider button next.", 'archi'),
         "group" => __("Data Settings", 'archi'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Prev Text",
         "param_name" => "prev_text",
         "value" => "",
         "description" => __("Set a custom text for slider button prev.", 'archi'),
         "group" => __("Data Settings", 'archi'),
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select % before image is visible?", 'archi'),
         "param_name" => "imgbefore_visible",
         "value" => array(   
            __('Default', 'archi') => 'none',
            __('30%', 'archi') => '0.3', 
            __('40%', 'archi') => '0.4', 
            __('50%', 'archi') => '0.5', 
            __('60%', 'archi') => '0.6', 
            __('70%', 'archi') => '0.7',                       
          ),
         "description" => __("How much of the before image is visible when the page loads?", 'archi'),
         "group" => __("Data Settings", 'archi'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Extra class name",
         "param_name" => "extraclass",
         "value" => "",
         "description" => __("Style particular content element differently - add a class name and refer to it in custom CSS.", 'archi'),
      ),         
    )));
} 

// Info Apps Landing
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Info Apps", 'archi'),
   "base"      => "info_apps",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array( 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Choose library icons",
         "param_name" => "icontype",
         "value" => array(                     
                     __('Icon Etline Font', 'archi') => 'etlinefont',
                     __('Icon Font Awesome', 'archi') => 'fontawesome', 
                     __('Icon Image', 'archi') => 'iconimg',                   
                    ),
         "description" => __("Select Etline-Font icons or Font-Awesome icons", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Add icon class name", 'archi'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Ex: icon-<code>wallet</code>, <a href='http://vegatheme.com/html/archi-icons-etlinefont/' target='_blank'>Find library Etline-Font icons</a>", 'archi'),
         "dependency"  => array( 'element' => 'icontype', 'value' => 'etlinefont' ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Add icon class name", 'archi'),
         "param_name" => "iconawesome",
         "value" => "",
         "description" => __("Ex: <code>coffee</code>, <a href='https://fontawesome.com/v4.7.0/icons/' target='_blank'>Find library Font-Awesome icons</a>", 'archi'),
         "dependency"  => array( 'element' => 'icontype', 'value' => 'fontawesome' ),
      ), 
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon Image",
         "param_name" => "iconimage",
         "value" => "",
         "description" => __("Upload your icon image width format: .png, .jpg, .svg, etc...", 'archi'),
         "dependency"  => array( 'element' => 'icontype', 'value' => 'iconimg' ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Content right.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Delay time for icon", 'archi'),
         "param_name" => "animation_delay",
         "value" => "",
         "description" => __("Use for animation effect.", 'archi')
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Icon color", 'archi'),
         "param_name"=> "icon_color",
         "value"     => "",
         "description" => __("Choose your icon color.", 'archi')
      ),      
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon Position",
         "param_name" => "style",
         "value" => array(                     
                     __('Icon right', 'archi') => 'right',
                     __('Icon left', 'archi') => 'left',                       
                     __('Icon center', 'archi') => 'center',                   
                    ),
         "description" => __("Select Icon Position", 'archi')
      ),      
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ),  
    )));
}

// Info Apps 2 
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Info Apps 2", 'archi'),
   "base"      => "info_apps2",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array( 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Choose library icons",
         "param_name" => "icontype",
         "value" => array(                     
                     __('Icon Etline Font', 'archi') => 'etlinefont',
                     __('Icon Font Awesome', 'archi') => 'fontawesome',
                     __('Icon Image', 'archi') => 'iconimg',                    
                    ),
         "description" => __("Select Etline-Font icons or Font-Awesome icons", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Add icon class name", 'archi'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Ex: icon-<code>wallet</code>, <a href='http://vegatheme.com/html/archi-icons-etlinefont/' target='_blank'>Find library Etline-Font icons</a>", 'archi'),
         "dependency"  => array( 'element' => 'icontype', 'value' => 'etlinefont' ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Add icon class name", 'archi'),
         "param_name" => "iconawesome",
         "value" => "",
         "description" => __("Ex: <code>coffee</code>, <a href='https://fontawesome.com/v4.7.0/icons/' target='_blank'>Find library Font-Awesome icons</a>", 'archi'),
         "dependency"  => array( 'element' => 'icontype', 'value' => 'fontawesome' ),
      ), 
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon Image",
         "param_name" => "iconimage",
         "value" => "",
         "description" => __("Upload your icon image width format: .png, .jpg, .svg, etc...", 'archi'),
         "dependency"  => array( 'element' => 'icontype', 'value' => 'iconimg' ),
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Content right.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Delay time for icon", 'archi'),
         "param_name" => "animation_delay",
         "value" => "",
         "description" => __("Use for animation effect.", 'archi')
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Icon color", 'archi'),
         "param_name"=> "icon_color",
         "value"     => "",
         "description" => __("Choose your icon color.", 'archi')
      ),
      array(
         'type' => 'vc_link',
          "heading" => __("Link Button", 'archi'),
          "param_name" => "linkbox",         
          "description" => __("Add your link to button.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Border Box",
         "param_name" => "border_box",
         "value" => array(                     
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',                       
                    ),
         "description" => __("Set Border Box, yes or no?", 'archi')
      ), 
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ), 
    )));
}

// Quick View (use)
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Quick Office", 'archi'),
   "base"      => "quickview",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo",
         "param_name" => "photo",
         "value" => "",
         "description" => __("Photo", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "content",
         "value" => "",
         "description" => __("Content", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Columns Image", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 5', 'archi') => 5,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 7', 'archi') => 7,
                  ),
         "description" => __("Select number columns for show.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Image position", 'archi'),
         "param_name" => "img_position",
         "value" => array(                        
                     esc_html__( 'Image on Left Row', 'archi' ) => 'imgleft',
                     esc_html__( 'Image on Right Row', 'archi' ) => 'imgright', 
                  ),
         "description" => __("Select Image position within row.", 'archi')
      ), 
    )));
}

// Quick View - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Quick Office 2", 'archi'),
   "base"      => "quickview2",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo",
         "param_name" => "photo",
         "value" => "",
         "description" => __("Photo", 'archi')
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "content",
         "value" => "",
         "description" => __("Content right.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Columns Image", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 5', 'archi') => 5,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 7', 'archi') => 7,
                  ),
         "description" => __("Select number columns for show.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Image position", 'archi'),
         "param_name" => "img_position",
         "value" => array(                        
                     esc_html__( 'Image on Left Row', 'archi' ) => 'imgleft',
                     esc_html__( 'Image on Right Row', 'archi' ) => 'imgright', 
                  ),
         "description" => __("Select Image position within row.", 'archi')
      ), 
    )));
}

// Video Tour - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Video Tour", 'archi'),
   "base" => "video_tour",
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(    
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo",
         "param_name" => "photo",
         "value" => "",
         "description" => __("Photo", 'archi')
      ),         
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Video Url", 'archi'),
         "param_name" => "video_url",
         "value" => "",
         "description" => __("Add youtube video link url, Ex: https://www.youtube.com/watch?v=efVWyPNd3xw", 'archi')
      ),      
    )));
}

// Typing Text
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Typing Text", 'archi'),
   "base" => "text_typing",
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(            
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text static", 'archi'),
         "param_name" => "text_static",
         "value" => "",
         "description" => __("Add text", 'archi')
      ),  
      // params group
      array(
          'type' => 'param_group',
          'value' => '',
          'heading' => 'Add typing text(multiple fields)',
          'param_name' => 'titles',
          // Note params is mapped inside param-group:
          'params' => array(
            array(
              'type' => 'textfield',
              "holder" => "div",
              "class" => "",
              'heading' => 'Enter your typing',
              'param_name' => 'title',
              "value" => "",
              "description" => __("Add Your Typing Text", 'archi')
            ),
            array(
              "type"      => "colorpicker",
              "holder"    => "div",
              "class"     => "",
              "heading"   => __("Typing Text color", 'archi'),
              "param_name"=> "tptextcolor",
              "value"     => "",
              "description" => __("Select typing text color.", 'archi'),
            ),  
          )                
      ),
      array(
        "type"      => "colorpicker",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Text color", 'archi'),
        "param_name"=> "textcolor",
        "value"     => "",
        "description" => __("Select heading color.", 'archi'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Character for cursor", 'archi'),
         "param_name" => "cursor_character",
         "value" => "",
         "description" => __("Add character for cursor, default: | ", 'archi')
      ),  
      array(
         "type"      => "textfield",
         "heading"   => __("Extra class name", 'archi'),
         "param_name"=> "class",
         "value"     => "",
         "description" => __("Style particular content element differently - add a class name and refer to it in custom CSS.", 'archi')
      ),   
    )));
}

// Buttons Download - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Download Button", 'archi'),
   "base" => "download_btn",
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(
      array(
         'type' => 'iconpicker',
         'heading' => __( 'Icon', 'archi' ),
         'param_name' => 'icon_fontawesome',
         'value' => 'fa fa-info-circle',
         'settings' => array(
            'emptyIcon' => false, // default true, display an "EMPTY" icon?
            'iconsPerPage' => 4000, // default 100, how many icons per/page to display
         ),         
         'description' => __( 'Select icon from library.', 'archi' ),
      ),    
      array(
        'type' => 'vc_link',
         "heading" => __("Link Banner Box", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add link to banner.", 'archi')
      ), 
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ), 
    )));
}

// Why Choose Us - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Why Choose Us", 'archi'),
   "base" => "reasons",
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "desc",
         "value" => "",
         "description" => __("Content right.", 'archi')
      ),      
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Type Icon",
         "param_name" => "reasons_type",
         "value" => array(
                     __('Use number type', 'archi') => 'number_type',
                     __('Use font icon', 'archi') => 'icon_type',                     
                    ),
         "description" => __("Select type icon", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number", 'archi'),
         "param_name" => "number",
         "value" => "",
         "description" => __("Add number", 'archi'),
         'dependency' => array(
            'element' => 'reasons_type',
            'value' => 'number_type',
         ),
      ),
      array(
         'type' => 'iconpicker',
         'heading' => __( 'Icon', 'archi' ),
         'param_name' => 'icon_fontawesome',
         'value' => 'fa fa-info-circle',
         'settings' => array(
            'emptyIcon' => false, // default true, display an "EMPTY" icon?
            'iconsPerPage' => 4000, // default 100, how many icons per/page to display
         ),         
         'description' => __( 'Select icon from library.', 'archi' ),
         'dependency' => array(
            'element' => 'reasons_type',
            'value' => 'icon_type',
         ),
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon box style",
         "param_name" => "box_style",
         "value" => array(
                     __('Icon box cicle', 'archi') => 'box_cicle',
                     __('Icon box square', 'archi') => 'box_square', 
                     __('Icon box none', 'archi') => 'box_none',                   
                    ),
         "description" => __("Select icon box style", 'archi')
      ), 
      array(
        'type' => 'vc_link',
         "heading" => __("Link Banner Box", 'archi'),
         "param_name" => "linkbox",         
         "description" => __("Add link to banner.", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Delay Animate", 'archi'),
         "param_name" => "delay",
         "value" => "",
         "description" => __("Add number delay animate, Ex: .5 or 1", 'archi')
      ),
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ), 
    )));
}

//Video Player
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Video Post", 'archi'),
   "base"      => "videoplayer",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link Url",
         "param_name" => "video",
         "value" => "",
         "description" => __("Ex: http://player.vimeo.com/video/88883554 or http://www.youtube.com/embed/eP2VWNtU5rw", 'archi')
      ),       
    )));
}

// Our Facts (use)
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Our Facts", 'archi'),
   "base" => "ourfacts",
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Fun Fact Icon",
         "param_name" => "icon",
         "value" => "",
         "description" => __("Use icon class name, Ex: mobile, Find <a target='_blank' href='http://vegatheme.com/html/archi-icons-etlinefont/'>Here</a>", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title Fact", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title display in Our Facts box.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number Fact", 'archi'),
         "param_name" => "number",
         "value" => "",
         "description" => __("Number display in Our Facts box.", 'archi')
      ),  
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ),     
    )));
}

// Portfolio Gallery - Landing Page
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Gallery", 'archi'),
   "base"      => "folio_gallery",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
         "type"      => "select_categories",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Select Categories", 'archi'),
         "param_name"=> "idcate",
         "value"     => "",
         "description" => __("Enter your category, It's help show portfolio by category.", 'archi')
      ), 
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Number portfolio per page", 'archi' ),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Enter Number Portfolio.", 'archi' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 5', 'archi') => 5,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Display Style", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('None', 'archi') => 'none',                     
                     __('Pagination', 'archi') => 'pagination',
                    ),
         "description" => __("Select display style for grid.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),
    )));
}

// Portfolio Gallery 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Gallery 2", 'archi'),
   "base"      => "folio_gallery2",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
         "type"      => "select_categories",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Select Categories", 'archi'),
         "param_name"=> "idcate",
         "value"     => "",
         "description" => __("Enter your category, It's help show portfolio by category.", 'archi')
      ), 
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number portfolio per page", 'archi' ),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Enter Number Portfolio.", 'archi' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,                
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),
    )));
}

// OT Image Gallery Style 1
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Image Gallery 1", 'archi'),
   "base"      => "ot_image_glallery",   
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(   
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Images Gallery",
         "param_name" => "gallery",
         "value" => "",
         "description" => __("Add all your images gallery and change image title name in <code>title</code> of image, add link the images to a specific page <code>caption</code> of image.", 'archi')
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,                
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),  
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Image Style", 'archi'),
         "param_name" => "img_style",
         "value" => array(   
                     __('Default', 'archi') => 'default',                
                     __('Rounded', 'archi') => 'rounded',
                    ),
         "description" => __("Select image display style.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Common Title", 'archi'),
         "param_name"=> "common_title",
         "value"     => "",
         "description" => __("Use a common title for all images when you hover on images, default: use title of each image.", 'archi')
      ),      
      array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => "Link target",
        "param_name" => "links_target",
        "value" => array(
                  __('New window', 'archi') => '_blank',
                  __('Same window', 'archi') => '_self',                  
                  ),
        "description" => __('Select link target, see more <a href="https://www.w3schools.com/tags/att_a_target.asp" target="_blank">w3c specification</a>', 'archi')
      ),
    )));
}

// OT Image Gallery Style 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Image Gallery 2", 'archi'),
   "base"      => "ot_image_glallery2",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(   
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Images Gallery",
         "param_name" => "gallery",
         "value" => "",
         "description" => __("Add images gallery and change image title name in <code>title</code> of image, add link the images to a specific page <code>caption</code> of image.", 'archi')
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6, 
                     __('Columns 5', 'archi') => 5,         
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),  
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Gap", 'archi'),
         "param_name" => "gap",
         "value" => array(   
                      __('0px', 'archi') => 0,
                      __('1px', 'archi') => 1,
                      __('2px', 'archi') => 2,
                      __('3px', 'archi') => 3,
                      __('4px', 'archi') => 4,
                      __('5px', 'archi') => 5,
                      __('10px', 'archi') => 10,
                      __('15px', 'archi') => 15,
                      __('20px', 'archi') => 20,
                      __('25px', 'archi') => 25,
                      __('30px', 'archi') => 30,
                      __('35px', 'archi') => 35,
                    ),
         "description" => __("Select gap between grid elements.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Common Title", 'archi'),
         "param_name"=> "common_title",
         "value"     => "",
         "description" => __("Use a common title for all images when you hover on images, default: use title of each image.", 'archi')
      ),           
      array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => "Link target",
        "param_name" => "links_target",
        "value" => array(
                  __('New window', 'archi') => '_blank',
                  __('Same window', 'archi') => '_self',                  
                  ),
        "description" => __('Select link target, see more <a href="https://www.w3schools.com/tags/att_a_target.asp" target="_blank">w3c specification</a>', 'archi')
      ),
    )));
}

// OT Album Gallery Style 1
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Album Gallery 1", 'archi'),
   "base"      => "ot_album_glallery",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(   
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Gallery", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Gallery.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number gallery per page", 'archi' ),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Enter Number Gallery.", 'archi' )
      ),  
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6, 
                     __('Columns 5', 'archi') => 5,         
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),  
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),          
    )));
}

// OT Album Gallery Style 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Album Gallery 2", 'archi'),
   "base"      => "ot_album_glallery2",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(   
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Gallery", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Gallery.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number gallery per page", 'archi' ),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Enter Number Gallery.", 'archi' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,                
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),  
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),          
    )));
}

// Portfolio Filter
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Filter", 'archi'),
   "base"      => "foliof",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Items per page", 'archi'),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Set max limit number of items to show per page or enter -1 to display all", 'archi' )
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Show Portfolio Next/Previous?", 'archi'),
         "param_name" => "arrow_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Show/Hide Next/Previous Button Between Portfolios.", 'archi')
      ),    
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Display Style", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('None', 'archi') => 'none',                     
                     __('Pagination', 'archi') => 'pagination',
                    ),
         "description" => __("Select display style for grid.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Show filter", 'archi'),
         "param_name" => "show_filter",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Append filter to grid.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Grid elements per row", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 5', 'archi') => 5,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number of single grid elements per row.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Gap", 'archi'),
         "param_name" => "gap",
         "value" => array(   
                      __('0px', 'archi') => 0,
                      __('1px', 'archi') => 1,
                      __('2px', 'archi') => 2,
                      __('3px', 'archi') => 3,
                      __('4px', 'archi') => 4,
                      __('5px', 'archi') => 5,
                      __('10px', 'archi') => 10,
                      __('15px', 'archi') => 15,
                      __('20px', 'archi') => 20,
                      __('25px', 'archi') => 25,
                      __('30px', 'archi') => 30,
                      __('35px', 'archi') => 35,
                    ),
         "description" => __("Select gap between grid elements.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Extra class name", 'archi'),
         "param_name"=> "extraclass",
         "value"     => "",
         "description" => __("Style particular content element differently - add a class name and refer to it in custom CSS.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Order by", 'archi'),
         "param_name" => "order_by",
         "value" => array(   
                    __('Title', 'archi') => 'title',
                    __('Date', 'archi') => 'date',
                    __('Order by post ID', 'archi') => 'ID',
                    __('Author', 'archi') => 'author',                    
                    __('Last modified date', 'archi') => 'modified',
                    __('Random order', 'archi') => 'rand',
                  ),
         "description" => __('Select how to sort retrieved portfolios. More at <a href="https://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters">WordPress codex page</a>. Default by Title', 'archi'),
         "group" => __("Data Settings", 'archi')
      ),    
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Sort order", 'archi'),
         "param_name" => "sort_order",
         "value" => array(   
                    __('Ascending', 'archi') => 'ASC',
                    __('Descending', 'archi') => 'DESC',                                         
                  ),
         "description" => __('Designates the ascending or descending order. More at <a href="https://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters">WordPress codex page</a>. Default by ASC', 'archi'),
         "group" => __("Data Settings", 'archi')
      ), 
    )));
}

//Portfolio Filter 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Filter 2", 'archi'),
   "base"      => "foliof2",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Items per page", 'archi'),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Set max limit number of items to show per page or enter -1 to display all", 'archi' )
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Show Portfolio Next/Previous?", 'archi'),
         "param_name" => "arrow_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Show/Hide Next/Previous Button Between Portfolios.", 'archi')
      ),           
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Display Style", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('None', 'archi') => 'none',                     
                     __('Pagination', 'archi') => 'pagination',
                    ),
         "description" => __("Select display style for grid.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show filter", 'archi'),
         "param_name" => "show_filter",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Append filter to grid.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),  
    )));
}

//Portfolio Filter 3
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Filter 3", 'archi'),
   "base"      => "foliof3",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Items per page", 'archi'),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Set max limit number of items to show per page or enter -1 to display all", 'archi' )
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Show Portfolio Next/Previous?", 'archi'),
         "param_name" => "arrow_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Show/Hide Next/Previous Button Between Portfolios.", 'archi')
      ),           
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Display Style", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('None', 'archi') => 'none',                     
                     __('Pagination', 'archi') => 'pagination',
                    ),
         "description" => __("Select display style for grid.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show filter", 'archi'),
         "param_name" => "show_filter",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Append filter to grid.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
    )));
}

//Portfolio Inverted Style
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Inverted Style", 'archi'),
   "base"      => "foliofinverted",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Items per page", 'archi'),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Set max limit number of items to show per page or enter -1 to display all", 'archi' )
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Show Portfolio Next/Previous?", 'archi'),
         "param_name" => "arrow_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Show/Hide Next/Previous Button Between Portfolios.", 'archi')
      ),          
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Display Style", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('None', 'archi') => 'none',                     
                     __('Pagination', 'archi') => 'pagination',
                    ),
         "description" => __("Select display style for grid.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show filter", 'archi'),
         "param_name" => "show_filter",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Append filter to grid.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
    )));
}

//Portfolio Style 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Style 2", 'archi'),
   "base"      => "foliostyle2",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
         "type"      => "select_categories",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Select Categories", 'archi'),
         "param_name"=> "idcate",
         "value"     => "",
         "description" => __("Enter your category, It's help show portfolio by category.", 'archi')
      ), 
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Items per page", 'archi'),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Set max limit number of items to show per page or enter -1 to display all", 'archi' )
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Show Portfolio Next/Previous?", 'archi'),
         "param_name" => "arrow_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Show/Hide Next/Previous Button Between Portfolios.", 'archi')
      ),        
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Display Style", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('None', 'archi') => 'none',                     
                     __('Pagination', 'archi') => 'pagination',
                    ),
         "description" => __("Select display style for grid.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Show filter", 'archi'),
         "param_name" => "show_filter",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Append filter to grid.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ),    
    )));
}

// Portfolio Carousel Style
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Carousel Style", 'archi'),
   "base"      => "portfolio_carousel",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(            
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Number Show Portfolio", 'archi'),
         "param_name"=> "show",
         "value"     => 8,
         "description" => __("Number Show Portfolio, Default: 8.", 'archi')
      ),
      array(
         "type"      => "select_categories",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Categories", 'archi'),
         "param_name"=> "idcate",
         "value"     => "",
         "description" => __("Enter your category.", 'archi')
      ),    
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Slider auto play", 'archi'),
         "param_name" => "slideplay",
         "value" => array(           
                     __('Select', 'archi') => '',                       
                     __('Yes', 'archi') => 'true',
                     __('No', 'archi') => 'false',
                    ),
         "description" => __("Select slider auto play.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number Visible.", 'archi'),
         "param_name" => "visible",
         "value" => array(                        
                     __('4 Columns', 'archi') => 4,
                     __('3 Columns', 'archi') => 3,
                     __('2 Columns', 'archi') => 2,
                    ),
         "description" => __("Select number visible for show.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show Portfolio Next/Previous?", 'archi'),
         "param_name" => "arrow_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Show/Hide Next/Previous Button Between Portfolios.", 'archi')
      ),   
    )));
}

// Portfolio Category
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Category", 'archi'),
   "base"      => "cate_portfolio",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(  
      array(
         "type"      => "select_categories",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Select Categories", 'archi'),
         "param_name"=> "idcate",
         "value"     => "",
         "description" => __("Enter your category, It's help show portfolio by category.", 'archi')
      ),             
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading"   => __("Number Show Portfolio", 'archi'),
         "param_name"=> "show",
         "value"     => 8,
         "description" => __("Number Show Portfolio, Default: 8.", 'archi')
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Show Portfolio Next/Previous?", 'archi'),
         "param_name" => "arrow_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Show/Hide Next/Previous Button Between Portfolios.", 'archi')
      ),                
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(   
                     __('Columns 6', 'archi') => 6,
					           __('Columns 5', 'archi') => 5,
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Gap", 'archi'),
         "param_name" => "gap",
         "value" => array(   
                      __('0px', 'archi') => 0,
                      __('1px', 'archi') => 1,
                      __('2px', 'archi') => 2,
                      __('3px', 'archi') => 3,
                      __('4px', 'archi') => 4,
                      __('5px', 'archi') => 5,
                      __('10px', 'archi') => 10,
                      __('15px', 'archi') => 15,
                      __('20px', 'archi') => 20,
                      __('25px', 'archi') => 25,
                      __('30px', 'archi') => 30,
                      __('35px', 'archi') => 35,
                    ),
         "description" => __("Select gap between grid elements.", 'archi')
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading"   => __("Category Active", 'archi'),
         "param_name"=> "cate_active",
         "value"     => '',
         "description" => __("Add your portfolio category slug, you want to active the first on front page, only one category slug.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Show filter", 'archi'),
         "param_name" => "show_filter",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Append filter to grid.", 'archi')
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading"   => __("Text Show All Portfolio", 'archi'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Enter your text filter show All Portfolio, empty do not show.", 'archi'),
         "dependency"  => array( 'element' => 'show_filter', 'value' => array( 'yes' ) ),
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Crop Images", 'archi'),
         "param_name" => "cropimage",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Crop Image Size.", 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
         "dependency"  => array( 'element' => 'cropimage', 'value' => array( 'yes' ) ),
      ), 
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ),       
    )));
}

// OT Portfolio Masonry
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Portfolio Masonry", 'archi'),
   "base"      => "portfolio_masonry",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(  
      array(
         "type"      => "select_categories",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Select Categories", 'archi'),
         "param_name"=> "idcate",
         "value"     => "",
         "description" => __("Enter your category, It's help show portfolio by category.", 'archi')
      ),        
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Items per page", 'archi'),
         "param_name" => "num",
         "value" => 8,
         "description" => __("Set max limit number of items to show per page or enter -1 to display all", 'archi' )
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Show Portfolio Next/Previous?", 'archi'),
         "param_name" => "arrow_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('No', 'archi') => 'no',
                    ),
         "description" => __("Show/Hide Next/Previous Button Between Portfolios.", 'archi')
      ),    
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array( 
                    __('Columns 3', 'archi') => 3,
                    __('Columns 4', 'archi') => 4,                    
          ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Gap", 'archi'),
         "param_name" => "gap",
         "value" => array(   
                      __('0px', 'archi') => 0,
                      __('1px', 'archi') => 1,
                      __('2px', 'archi') => 2,
                      __('3px', 'archi') => 3,
                      __('4px', 'archi') => 4,
                      __('5px', 'archi') => 5,
                      __('10px', 'archi') => 10,
                      __('15px', 'archi') => 15,
                      __('20px', 'archi') => 20,
                      __('25px', 'archi') => 25,
                      __('30px', 'archi') => 30,
                      __('35px', 'archi') => 35,
                    ),
         "description" => __("Select gap between grid elements.", 'archi')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Width", 'archi' ),
         "param_name" => "ratio_width",
         "value" => 700,
         "description" => __("Enter Image Width, default: 700", 'archi' ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Height", 'archi' ),
         "param_name" => "ratio_height",
         "value" => 466,
         "description" => __("Enter Image Height, default: 466", 'archi' ),
      ), 
    )));
}

if ( ! function_exists( 'is_plugin_active' ) ) {
  require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {     
  if ( function_exists( 'vc_add_shortcode_param' ) ) {
     vc_add_shortcode_param( 'select_categories', 'select_param', get_template_directory_uri() . '/framework/admin/js/select-field.js' );
  } elseif ( function_exists( 'add_shortcode_param' ) ) {
     add_shortcode_param( 'select_categories', 'select_param', get_template_directory_uri() . '/framework/admin/js/select-field.js' );
  }
}   

function select_param( $settings, $value ) {
  $categories = get_terms( 'categories' );
  $cat = array();
  foreach( $categories as $category ) {
     if( $category ) {
        $cat[] = sprintf('<option value="%s">%s</option>',
           esc_attr( $category->slug ),
           $category->name
        );
     }

  }

  return sprintf(
     '<input type="hidden" name="%s" value="%s" class="wpb-input-categories wpb_vc_param_value wpb-textinput %s %s_field">
     <select class="select-categories-post">
     %s
     </select>',
     esc_attr( $settings['param_name'] ),
     esc_attr( $value ),
     esc_attr( $settings['param_name'] ),
     esc_attr( $settings['type'] ),
     implode( '', $cat )
  );
}

//Clients Logo 
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Clients Logo", 'archi'),
   "base"      => "logos",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Logo Client",
         "param_name" => "gallery",
         "value" => "",
         "description" => __("Add all your logo client and add link url in <code>caption</code> of logo image.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Visible Logo",
         "param_name" => "visible",
         "value" => array(
                     __('Select Visible', 'archi') => '',
                     __('4 items', 'archi') => '4',
                     __('5 items', 'archi') => '5',
                     __('6 items', 'archi') => '6', 
                    ),
         "description" => __("Number visible", 'archi')
      ), 
      array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => "Custom link target",
        "param_name" => "custom_links_target",
        "value" => array(
                   __('Same window', 'archi') => '_self',
                   __('New window', 'archi') => '_blank', 
                   __('The parent frame', 'archi') => '_parent',
                   __('The full body of the window', 'archi') => '_top',
                  ),
        "description" => __('Select link target, see more <a href="https://www.w3schools.com/tags/att_a_target.asp" target="_blank">w3c specification</a>', 'archi')
      ),
    )));
}

//Our Team
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Our Team", 'archi'),
   "base" => "team",
   "class" => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params" => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo Member",
         "param_name" => "photo",
         "value" => "",
         "description" => __("Avarta of member, Recomended Size: 420 x 420", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Name", 'archi'),
         "param_name" => "name",
         "value" => "",
         "description" => __("Member's Name", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Job", 'archi'),
         "param_name" => "job",
         "value" => "",
         "description" => __("Member's job.", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Description",
         "param_name" => "content",
         "value" => "",
         "description" => __("Description", 'archi')
      ), 
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Icon 1", 'archi'),
         "param_name"=> "icon1",
         "value"     => "",
         "description" => __("EX: twitter, facebook, skype...Find here: <a target='_blank' href='https://fontawesome.com/v4.7.0/icons/'>https://fontawesome.com/v4.7.0/icons/</a>", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 1",
         "param_name"=> "url1",
         "value"     => "",
         "description" => __("Url.", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Icon 2", 'archi'),
         "param_name"=> "icon2",
         "value"     => "",
         "description" => __("EX: twitter, facebook, skype...Find here: <a target='_blank' href='https://fontawesome.com/v4.7.0/icons/'>https://fontawesome.com/v4.7.0/icons/</a>", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 2",
         "param_name"=> "url2",
         "value"     => "",
         "description" => __("Url.", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Icon 3", 'archi'),
         "param_name"=> "icon3",
         "value"     => "",
         "description" => __("EX: twitter, facebook, skype...Find here: <a target='_blank' href='https://fontawesome.com/v4.7.0/icons/'>https://fontawesome.com/v4.7.0/icons/</a>", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 3",
         "param_name"=> "url3",
         "value"     => "",
         "description" => __("Url.", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Icon 4", 'archi'),
         "param_name"=> "icon4",
         "value"     => "",
         "description" => __("EX: twitter, facebook, skype...Find here: <a target='_blank' href='https://fontawesome.com/v4.7.0/icons/'>https://fontawesome.com/v4.7.0/icons/</a>", 'archi')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 4",
         "param_name"=> "url4",
         "value"     => "",
         "description" => __("Url.", 'archi')
      ),
    )));
}

//Our Team 2
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Our Team 2", 'archi'),
   "base" => "team2",
   "class" => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params" => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo Member",
         "param_name" => "photo",
         "value" => "",
         "description" => __("Avarta of member, Recomended Size: 420 x 420", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Name", 'archi'),
         "param_name" => "name",
         "value" => "",
         "description" => __("Member's Name", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Job", 'archi'),
         "param_name" => "job",
         "value" => "",
         "description" => __("Member's job.", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Description",
         "param_name" => "content",
         "value" => "",
         "description" => __("Description", 'archi')
      ), 
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add team social sharing (multiple field)',     
         'param_name' => 'socials',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Icon',
               'param_name' => 'social_icon',
               "value" => "",
               "description" => __("Add social icon class name, eg: facebook, find more: https://fontawesome.com/v4.7.0/icons/", 'archi')
            ),  
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Url',
               'param_name' => 'social_url',
               "value" => "",
               "description" => __("Add social link url (multiple field)", 'archi')
            ),              
         )                
      ),       
    )));
}

// Testimonial Slider
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Testimonial Silder", 'archi'),
   "base" => "testslide",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(
      array(
         "type"      => "select_category_testimonials",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Select Categories", 'archi'),
         "param_name"=> "idcate_testimonials",
         "value"     => "",
         "description" => __("Enter your testimonials category.", 'archi'),
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => "Visible Testimonial",
         "param_name" => "visible",
         "value" => array(
                     __('Select Visible', 'archi') => '',
                     __('1 Col', 'archi') => '1',
                     __('2 Cols', 'archi') => '2',
                     __('3 Cols', 'archi') => '3', 
                     __('4 Cols', 'archi') => '4',                  
                    ),
         "description" => __("Description", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => "Number Testimonial",
         "param_name" => "number",
         "value" => "",
         "description" => __("Add Number -1 for show all post.", 'archi')
      ),    
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => "Auto Play",
         "param_name" => "autoplay",
         "value" => array(
                    __('No', 'archi') => 'no',
                    __('Yes', 'archi') => 'yes',                                      
                    ),
         "description" => __("Autoplay Slider.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => "Slide Speed",
         "param_name" => "slidespeed",
         "value" => 200,
         "description" => __("Add Number min 200 to 1000", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => "Pagination Speed",
         "param_name" => "paginationspeed",
         "value" => 800,
         "description" => __("Add Number min 800 to 2000", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => "Rewind Speed",
         "param_name" => "rewindspeed",
         "value" => 1000,
         "description" => __("Add Number min 1000 to 3000", 'archi')
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Auto Height",
         "param_name" => "autoheight",
         "value" => array(
                    __('No', 'archi') => 'no',
                    __('Yes', 'archi') => 'yes',                                                     
                    ),
         "description" => __("Auto Height for slider item.", 'archi')
      ),  
    )
    ));
}

// Testimonial Grid
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Testimonial Grid", 'archi'),
   "base" => "testgrid",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(  
      array(
         "type"      => "select_category_testimonials",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Select Categories", 'archi'),
         "param_name"=> "idcate_testimonials",
         "value"     => "",
         "description" => __("Enter your testimonials category.", 'archi'),
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number show testimonial per page.",
         "param_name" => "number",
         "value" => "",
         "description" => __("Add Number -1 for show all post.", 'archi')
      ),    
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "testimonial_columns",
         "value" => array(   
                     __('4 Columns', 'archi') => 4,
                     __('3 Columns', 'archi') => 3,
                     __('2 Columns', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),    
    )
    ));
}

if ( ! function_exists( 'is_plugin_active' ) ) {
  require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {     
  if ( function_exists( 'vc_add_shortcode_param' ) ) {
     vc_add_shortcode_param( 'select_category_testimonials', 'select_param_testimonials', get_template_directory_uri() . '/framework/admin/js/select-field-testimonials.js' );
  } elseif ( function_exists( 'add_shortcode_param' ) ) {
     add_shortcode_param( 'select_category_testimonials', 'select_param_testimonials', get_template_directory_uri() . '/framework/admin/js/select-field-testimonials.js' );
  }
}   

function select_param_testimonials( $settings, $value ) {
  $category_testimonials = get_terms( 'category_testimonial' );
  $cat_testimonials = array();
  foreach( $category_testimonials as $category ) {
     if( $category ) {
        $cat_testimonials[] = sprintf('<option value="%s">%s</option>',
           esc_attr( $category->slug ),
           $category->name
        );
     }

  }

  return sprintf(
     '<input type="hidden" name="%s" value="%s" class="wpb-input-category_testimonials wpb_vc_param_value wpb-textinput %s %s_field">
     <select class="select-category_testimonials-post">
     %s
     </select>',
     esc_attr( $settings['param_name'] ),
     esc_attr( $value ),
     esc_attr( $settings['param_name'] ),
     esc_attr( $settings['type'] ),
     implode( '', $cat_testimonials )
  );
}

// Testimonial Slider Group
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Testimonial Slider Group", 'archi'),
   "base"      => "testi_group",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(  
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add Testimonial (multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Customer Name',
               'param_name' => 'name',
               "value" => "",
               "description" => __("Add customer name (multiple field)", 'archi')
            ),    
            array(
               'type' => 'textarea',
               "holder" => "div",
               "class" => "",
               'heading' => 'customer review comment',
               'param_name' => 'review',
               "value" => "",
               "description" => __("Add customer review comment (multiple field)", 'archi')
            ),             
         )                
      ),       
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => "Auto Play",
         "param_name" => "autoplay",
         "value" => array(
                    __('No', 'archi') => 'no',
                    __('Yes', 'archi') => 'yes',                                      
                    ),
         "description" => __("Autoplay Slider.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => "Slide Speed",
         "param_name" => "slidespeed",
         "value" => 200,
         "description" => __("Add Number min 200 to 1000", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => "Pagination Speed",
         "param_name" => "paginationspeed",
         "value" => 800,
         "description" => __("Add Number min 800 to 2000", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => "Rewind Speed",
         "param_name" => "rewindspeed",
         "value" => 1000,
         "description" => __("Add Number min 1000 to 3000", 'archi')
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Auto Height",
         "param_name" => "autoheight",
         "value" => array(
                    __('No', 'archi') => 'no',
                    __('Yes', 'archi') => 'yes',                                                     
                    ),
         "description" => __("Auto Height for slider item.", 'archi')
      ),                                       
    )));
}

// Services Grid
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Services Grid", 'archi'),
   "base" => "services",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(   
      array(
        "type"      => "select_category_services",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Categories", 'archi'),
        "param_name"=> "idcate_services",
        "value"     => "",
        "description" => __("Enter your category.", 'archi')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number show services per page.",
         "param_name" => "number",
         "value" => "",
         "description" => __("Add Number -1 for show all post.", 'archi')
      ),    
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show Image?", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('Style 1: image above content', 'archi') => 'imageabove',
                     __('Style 2: image below content', 'archi') => 'imagebelow',
                     __('Style 3: image not show', 'archi') => 'noimage',
                    ),
         "description" => __("Select show image position of Services", 'archi')
      ), 
	  array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns", 'archi'),
         "param_name" => "services_columns",
         "value" => array(   
                     __('4 Columns', 'archi') => 4,
                     __('3 Columns', 'archi') => 3,
                     __('2 Columns', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show service button?", 'archi'),
         "param_name" => "show_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('no', 'archi') => 'no',
                    ),
         "description" => __("Option show/hide button on service post.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Style", 'archi'),
         "param_name" => "button_style",
         "value" => array(   
                     __('Full width', 'archi') => 'full',
                     __('No full width', 'archi') => 'nofull',
                    ),
         "description" => __("Select button style.", 'archi'),
         "dependency"  => array( 'element' => 'show_btn', 'value' => 'yes' ), 
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button text",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Add button text, default: read more.", 'archi'),
         "dependency"  => array( 'element' => 'show_btn', 'value' => 'yes' ), 
      ),            
    )
    ));
}

// Services Grid 2
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Services Grid 2", 'archi'),
   "base" => "services2",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array( 
      array(
         "type"      => "select_category_services",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Categories", 'archi'),
         "param_name"=> "idcate_services",
         "value"     => "",
         "description" => __("Enter your category.", 'archi')
      ),      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number show services per page.",
         "param_name" => "number",
         "value" => "",
         "description" => __("Add Number -1 for show all post.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "services_columns",
         "value" => array(   
                     __('4 Columns', 'archi') => 4,
                     __('3 Columns', 'archi') => 3,
                     __('2 Columns', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show service button?", 'archi'),
         "param_name" => "show_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('no', 'archi') => 'no',
                    ),
         "description" => __("Option show/hide button on service post.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button text",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Add button text, default: read more.", 'archi'),
         "dependency"  => array( 'element' => 'show_btn', 'value' => 'yes' ), 
      ), 
    )
    ));
}

// Services Grid 3
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Services Grid 3", 'archi'),
   "base" => "services3",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(  
      array(
         "type"      => "select_category_services",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Categories", 'archi'),
         "param_name"=> "idcate_services",
         "value"     => "",
         "description" => __("Enter your category.", 'archi')
      ),     
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number show services per page.",
         "param_name" => "number",
         "value" => "",
         "description" => __("Add Number -1 for show all post.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "services_columns",
         "value" => array(   
                     __('4 Columns', 'archi') => 4,
                     __('3 Columns', 'archi') => 3,
                     __('2 Columns', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show service button?", 'archi'),
         "param_name" => "show_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('no', 'archi') => 'no',
                    ),
         "description" => __("Option show/hide button on service post.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button text",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Add button text, default: read more.", 'archi'),
         "dependency"  => array( 'element' => 'show_btn', 'value' => 'yes' ), 
      ),
      array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Disable Animation effect?', 'archi' ),
        'param_name' => 'servicebox_animation',
        'description' => esc_html__( 'If checked will disable animation for service post.', 'archi' ),
        'value' => array( esc_html__( 'Yes', 'archi' ) => 'yes' ),
      ), 
    )
    ));
}

// Services List
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Services List", 'archi'),
   "base" => "serviceslist",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array( 
      array(
         "type"      => "select_category_services",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Categories", 'archi'),
         "param_name"=> "idcate_services",
         "value"     => "",
         "description" => __("Enter your category.", 'archi')
      ),     
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number show services per page.",
         "param_name" => "number",
         "value" => "",
         "description" => __("Add Number -1 for show all post.", 'archi')
      ),        
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show service button?", 'archi'),
         "param_name" => "show_btn",
         "value" => array(   
                     __('Yes', 'archi') => 'yes',
                     __('no', 'archi') => 'no',
                    ),
         "description" => __("Option show/hide button on service post.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button text",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Add button text, default: read more.", 'archi'),
         "dependency"  => array( 'element' => 'show_btn', 'value' => 'yes' ), 
      ),  
    )
    ));
}

if ( ! function_exists( 'is_plugin_active' ) ) {
  require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {     
  if ( function_exists( 'vc_add_shortcode_param' ) ) {
     vc_add_shortcode_param( 'select_category_services', 'select_param_services', get_template_directory_uri() . '/framework/admin/js/select-field-services.js' );
  } elseif ( function_exists( 'add_shortcode_param' ) ) {
     add_shortcode_param( 'select_category_services', 'select_param_services', get_template_directory_uri() . '/framework/admin/js/select-field-services.js' );
  }
}   

function select_param_services( $settings, $value ) {
  $category_services = get_terms( 'category_service' );
  $cat_services = array();
  foreach( $category_services as $category ) {
     if( $category ) {
        $cat_services[] = sprintf('<option value="%s">%s</option>',
           esc_attr( $category->slug ),
           $category->name
        );
     }

  }

  return sprintf(
     '<input type="hidden" name="%s" value="%s" class="wpb-input-category_services wpb_vc_param_value wpb-textinput %s %s_field">
     <select class="select-category_services-post">
     %s
     </select>',
     esc_attr( $settings['param_name'] ),
     esc_attr( $value ),
     esc_attr( $settings['param_name'] ),
     esc_attr( $settings['type'] ),
     implode( '', $cat_services )
  );
}

// OT Process
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Process", 'archi'),
   "base" => "process",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(    
      array(
         "type"      => "select_category_process",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Categories", 'archi'),
         "param_name"=> "idcate_process",
         "value"     => "",
         "description" => __("Enter your category, show process by special category", 'archi')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Process Show",
         "param_name" => "number",
         "value" => "",
         "description" => __("Number show process per page.", 'archi')
      ),  
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Style in Circles Tab", 'archi'),
         "param_name" => "style_circles",
         "value" => array(   
                     __('Text Only', 'archi') => 'circles_text',
                     __('Image Only', 'archi') => 'circles_image',
                     __('Image + Text', 'archi') => 'circles_textimage',
                     __('Icon Only', 'archi') => 'circles_icon',
                     __('Icon + Text', 'archi') => 'circles_texticon',
                    ),
         "description" => __("Select style inside the circles of the process tab.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Shape", 'archi'),
         "param_name" => "tabs_shape",
         "value" => array(   
                     __('Round', 'archi') => 'shape_round',                    
                     __('Square', 'archi') => 'shape_square',                     
                    ),
         "description" => __("Select tabs shape.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Active section",
         "param_name" => "active_circletab",
         "value" => "",
         "description" => __("Enter active section number (Note: to have all tab closed on initial load enter non-existing number).", 'archi')
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Extra class name",
         "param_name" => "extra_class",
         "value" => "",
         "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'archi')
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Time Delay",
         "param_name" => "time_delay",
         "value" => "",
         "description" => __("Default: 0.4", 'archi'),
         'group' => __( 'Animation Options', 'archi' )
      ), 
    )
    ));
}

// OT Process Links
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Process Links", 'archi'),
   "base" => "process_links",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(    
      array(
         "type"      => "select_category_process",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Categories", 'archi'),
         "param_name"=> "idcate_process",
         "value"     => "",
         "description" => __("Enter your category, show process by special category", 'archi')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Process Show",
         "param_name" => "number",
         "value" => "",
         "description" => __("Number show process per page.", 'archi')
      ),  
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Style in Circles Tab", 'archi'),
         "param_name" => "style_circles",
         "value" => array(   
                     __('Text Only', 'archi') => 'circles_text',
                     __('Image Only', 'archi') => 'circles_image',
                     __('Image + Text', 'archi') => 'circles_textimage',
                     __('Icon Only', 'archi') => 'circles_icon',
                     __('Icon + Text', 'archi') => 'circles_texticon',
                    ),
         "description" => __("Select style inside the circles of the process tab.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Shape", 'archi'),
         "param_name" => "tabs_shape",
         "value" => array(   
                     __('Round', 'archi') => 'shape_round',                    
                     __('Square', 'archi') => 'shape_square',                     
                    ),
         "description" => __("Select tabs shape.", 'archi')
      ),     
      array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => "Custom link target",
        "param_name" => "custom_links_target",
        "value" => array(
                   __('Same window', 'archi') => '_self',
                   __('New window', 'archi') => '_blank', 
                   __('The parent frame', 'archi') => '_parent',
                  ),
        "description" => __('Select link target, see more <a href="https://www.w3schools.com/tags/att_a_target.asp" target="_blank">w3c specification</a>', 'archi')
      ),   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Extra class name",
         "param_name" => "extra_class",
         "value" => "",
         "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'archi')
      ), 
    )
    ));
}

if ( ! function_exists( 'is_plugin_active' ) ) {
  require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {     
  if ( function_exists( 'vc_add_shortcode_param' ) ) {
     vc_add_shortcode_param( 'select_category_process', 'select_param_process', get_template_directory_uri() . '/framework/admin/js/select-field-process.js' );
  } elseif ( function_exists( 'add_shortcode_param' ) ) {
     add_shortcode_param( 'select_category_process', 'select_param_process', get_template_directory_uri() . '/framework/admin/js/select-field-process.js' );
  }
}   

function select_param_process( $settings, $value ) {
  $category_process = get_terms( 'category_process' );
  $cat_process = array();
  foreach( $category_process as $category ) {
     if( $category ) {
        $cat_process[] = sprintf('<option value="%s">%s</option>',
           esc_attr( $category->slug ),
           $category->name
        );
     }

  }

  return sprintf(
     '<input type="hidden" name="%s" value="%s" class="wpb-input-category_process wpb_vc_param_value wpb-textinput %s %s_field">
     <select class="select-category_process-post">
     %s
     </select>',
     esc_attr( $settings['param_name'] ),
     esc_attr( $value ),
     esc_attr( $settings['param_name'] ),
     esc_attr( $settings['type'] ),
     implode( '', $cat_process )
  );
}

// OT Simple Process
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Simple Process", 'archi'),
   "base" => "simple_process",
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(          
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Process Show",
         "param_name" => "number",
         "value" => "",
         "description" => __("Number show process per page.", 'archi')
      ),    
      // params group
      array(
       'type' => 'param_group',  
       'heading' => 'Add Process (multiple field)',     
       'param_name' => 'titles',
       'value' => '',
       // Note params is mapped inside param-group:
       'params' => array(  
          array(
             'type' => 'textfield',
             "holder" => "div",
             "class" => "",
             'heading' => 'Title',
             'param_name' => 'title',
             "value" => "",
             "description" => __("Add your title (multiple field)", 'archi')
          ),  
          array(
             'type' => 'textarea',
             "holder" => "div",
             "class" => "",
             'heading' => 'Content',
             'param_name' => 'desc',
             "value" => "",
             "description" => __("Add your content (multiple field)", 'archi')
          ),             
        )                
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Extra class name",
         "param_name" => "extra_class",
         "value" => "",
         "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'archi')
      ), 
    )
    ));
}

// OT Blog Silder
if(function_exists('vc_map')){   
   vc_map( array(
   "name" => __("OT Blog Silder", 'archi'),
   "base" => "latestblog",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(
      array(
        "type"      => "select_category",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Categories", 'archi'),
        "param_name"=> "idcate_post",
        "value"     => "",
        "description" => __("Enter your category.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Show Post",
         "param_name" => "number",
         "value" => "",
         "description" => __("Enter Number Post", 'archi')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Blog Excerpt Lenght",
         "param_name" => "excerpt",
         "value" => "",
         "description" => __("Enter Number Excerpt Lenght.", 'archi')
      ),   
      array(
            'type' => 'checkbox',
            'heading' => esc_html__( 'Show read more button?', 'archi' ),
            'param_name' => 'read_more',
            'description' => esc_html__( 'If checked blog post will be set to show button read more.', 'archi' ),
            'value' => array( esc_html__( 'Yes', 'archi' ) => 'yes' ),
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button text",
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Live a blank will be use default text: Read More", 'archi'),
         'dependency' => array(
            'element' => 'read_more',
            'not_empty' => true,
          ),
      ),
      array(
            'type' => 'checkbox',
            'heading' => esc_html__( 'Hidden Post Date?', 'archi' ),
            'param_name' => 'show_date',
            'description' => esc_html__( 'If checked blog post will be set to hidden date.', 'archi' ),
            'value' => array( esc_html__( 'Yes', 'archi' ) => 'yes' ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Visible Columns",
         "param_name" => "visible",
         "value" => "",
         "description" => __("Enter Visible Columns, eg: 1, 2, 3, 4.", 'archi'),
         'group' => __( 'Slider Options', 'archi' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => "Auto Play",
         "param_name" => "autoplay",
         "value" => array(
                    __('No', 'archi') => 'no',
                    __('Yes', 'archi') => 'yes',                                      
                    ),
         "description" => __("Autoplay Slider.", 'archi'),
         'group' => __( 'Slider Options', 'archi' )
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => "Slide Speed",
         "param_name" => "slidespeed",
         "value" => 200,
         "description" => __("Add Number min 200 to 1000", 'archi'),
         'group' => __( 'Slider Options', 'archi' )
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => "Pagination Speed",
         "param_name" => "paginationspeed",
         "value" => 800,
         "description" => __("Add Number min 800 to 2000", 'archi'),
         'group' => __( 'Slider Options', 'archi' )
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => "Rewind Speed",
         "param_name" => "rewindspeed",
         "value" => 1000,
         "description" => __("Add Number min 1000 to 3000", 'archi'),
         'group' => __( 'Slider Options', 'archi' )
      ),         
    )
    ));
}

// OT Blog List
if(function_exists('vc_map')){   
   vc_map( array(
   "name" => __("OT Blog List", 'archi'),
   "base" => "bloglist",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(
      array(
        "type"      => "select_category",
        "holder"    => "div",
        "class"     => "",
        "heading"   => __("Categories", 'archi'),
        "param_name"=> "idcate_post",
        "value"     => "",
        "description" => __("Enter your category.", 'archi')
      ), 
      array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => "Number Show Post",
        "param_name" => "number",
        "value" => "",
        "description" => __("Enter number post per page.", 'archi')
      ),    
      array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => "Blog Excerpt Lenght",
        "param_name" => "excerpt",
        "value" => "",
        "description" => __("Enter Number Excerpt Lenght.", 'archi')
      ),   
      array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Show read more button?', 'archi' ),
        'param_name' => 'read_more',
        'description' => esc_html__( 'If checked blog post will be set to show button read more.', 'archi' ),
        'value' => array( esc_html__( 'Yes', 'archi' ) => 'yes' ),
      ),       
      array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => "Button text",
        "param_name" => "btntext",
        "value" => "",
        "description" => __("Live a blank will be use default text: Read More", 'archi'),
        'dependency' => array(
          'element' => 'read_more',
          'not_empty' => true,
        ),
      ),
      array(
        'type' => 'checkbox',
        'heading' => esc_html__( 'Hidden Post Date?', 'archi' ),
        'param_name' => 'show_date',
        'description' => esc_html__( 'If checked blog post will be set to hidden date.', 'archi' ),
        'value' => array( esc_html__( 'Yes', 'archi' ) => 'yes' ),
      ), 
    )
  ));
}

if ( ! function_exists( 'is_plugin_active' ) ) {
  require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {     
  if ( function_exists( 'vc_add_shortcode_param' ) ) {
     vc_add_shortcode_param( 'select_category', 'select_param_blogpost', get_template_directory_uri() . '/framework/admin/js/select-field-post.js' );
  } elseif ( function_exists( 'add_shortcode_param' ) ) {
     add_shortcode_param( 'select_category', 'select_param_blogpost', get_template_directory_uri() . '/framework/admin/js/select-field-post.js' );
  }
}   

function select_param_blogpost( $settings, $value ) {
  $category_post = get_terms( 'category' );
  $cat_blogpost = array();
  foreach( $category_post as $category ) {
     if( $category ) {
        $cat_blogpost[] = sprintf('<option value="%s">%s</option>',
           esc_attr( $category->slug ),
           $category->name
        );
     }
  }

  return sprintf(
     '<input type="hidden" name="%s" value="%s" class="wpb-input-category wpb_vc_param_value wpb-textinput %s %s_field">
     <select class="select-category-post">
     %s
     </select>',
     esc_attr( $settings['param_name'] ),
     esc_attr( $value ),
     esc_attr( $settings['param_name'] ),
     esc_attr( $settings['type'] ),
     implode( '', $cat_blogpost )
  );
}

// OT Pricing Table
if(function_exists('vc_map')){
	vc_map( array(
   "name" => __("OT Pricing Table", 'archi'),
   "base" => "pricingtable",
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title Pricing", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title display in Pricing Table.", 'archi')
      ),
	   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Price Pricing", 'archi'),
         "param_name" => "price",
         "value" => "",
         "description" => __("Price display in Pricing Table.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Per Time", 'archi'),
         "param_name" => "time",
         "value" => "",
         "description" => __("Price per time in Pricing Table.", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Detail Pricing", 'archi'),
         "param_name" => "content",
         "value" => "",
         "description" => __("Content Pricing Table.", 'archi')
      ),
	    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Label Button", 'archi'),
         "param_name" => "btntext",
         "value" => "",
         "description" => __("Add Your Button Text.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link Button", 'archi'),
         "param_name" => "btnlink",
         "value" => "",
         "description" => __("Add Link Url, Empty do not show.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Table Width (%)", 'archi'),
         "param_name" => "width",
         "value" => "",
         "description" => __("Style width Pricing Table. Ex: 4 columns - 25%, 5 columns: 20%, 3 columns: 33.33%.", 'archi')
      ),
	    array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Featured Pricing?", 'archi'),
         "param_name" => "featured",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Featured Pricing.", 'archi')
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Style Table", 'archi'),
         "param_name" => "style",
         "value" => array(   
                     __('Style 1: Light', 'archi') => 'light',
                     __('Style 2: Dark', 'archi') => 'dark',
                    ),
         "description" => __("Select Style Pricing Tables", 'archi')
      ),
    )));
}

// OT Pricing Table 2
if(function_exists('vc_map')){
  vc_map( array(
   "name" => __("OT Pricing Table 2", 'archi'),
   "base" => "pricingtable2",
   "class" => "",
   "category" => __( "Archi Elements", 'archi'),
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title Pricing", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title display on Pricing Table.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Currency for Pricing", 'archi'),
         "param_name" => "currency",
         "value" => "",
         "description" => __("Currency display on Pricing Table, eg: $", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Price Pricing", 'archi'),
         "param_name" => "price",
         "value" => "",
         "description" => __("Price display on Pricing Table.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Time", 'archi'),
         "param_name" => "time",
         "value" => "",
         "description" => __("Time on Pricing Table, eg: p/annaul", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Detail Pricing", 'archi'),
         "param_name" => "content",
         "value" => "",
         "description" => __("Content Pricing Table.", 'archi')
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Featured Pricing?", 'archi'),
         "param_name" => "featured",
         "value" => array(   
                     __('No', 'archi') => 'no',
                     __('Yes', 'archi') => 'yes',
                    ),
         "description" => __("Select Featured Pricing.", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Ribbon text", 'archi'),
         "param_name" => "ribbon_text",
         "value" => "",
         "description" => __("Ribbon text for Featured Pricing.", 'archi'),
         "dependency"  => array( 'element' => 'featured', 'value' => 'yes' ),
      ),
      array(
         'type' => 'vc_link',
          "heading" => __("Link button", 'archi'),
          "param_name" => "linkbox",         
          "description" => __("Add your link to button pricing table.", 'archi')
      ), 
    )));
}

// Project Slider - image carousel
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Image Carousel", 'archi'),
   "base"      => "image_carousel",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Image Gallery",
         "param_name" => "gallery",
         "value" => "",         
      ),      
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Slider auto play", 'archi'),
         "param_name" => "slideplay",
         "value" => array(           
                     __('Select', 'archi') => '',                       
                     __('Yes', 'archi') => 'true',
                     __('No', 'archi') => 'false',
                    ),
         "description" => __("Select slider auto play.", 'archi')
      ), 
    )));
}

// Simple Slider - images carousel
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Simple Slider", 'archi'),
   "base"      => "simple_slider",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Image Gallery",
         "param_name" => "gallery",
         "value" => "",         
      ),      
    )));
}

// Profile Experiences
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Profile Experiences", 'archi'),
   "base"      => "profile_experiences",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(  
      // params group
      array(
         'type' => 'param_group',  
         'heading' => 'Add Profile Experiences (multiple field)',     
         'param_name' => 'titles',
         'value' => '',
         // Note params is mapped inside param-group:
         'params' => array(
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Date',
               'param_name' => 'date',
               "value" => "",
               "description" => __("Add your date (multiple field)", 'archi')
            ),  
            array(
               'type' => 'textfield',
               "holder" => "div",
               "class" => "",
               'heading' => 'Title',
               'param_name' => 'title',
               "value" => "",
               "description" => __("Add your title (multiple field)", 'archi')
            ),  
            array(
               'type' => 'textarea',
               "holder" => "div",
               "class" => "",
               'heading' => 'SubTitle',
               'param_name' => 'stitle',
               "value" => "",
               "description" => __("Add your subtitle (multiple field)", 'archi')
            ),             
         )                
      ),                                        
    )));
}

// Contact Info
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Contact Info", 'archi'),
   "base"      => "info_contact",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Archi Elements',
   "params"    => array(   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Type Icon",
         "param_name" => "reasons_type",
         "value" => array(
                     __('Select from library', 'archi') => 'icon_library',
                     __('Add by manual', 'archi') => 'icon_online',                                        
                    ),
         "description" => __("Select type icon", 'archi')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Add icon class name", 'archi'),
         "param_name" => "icon_custom",
         "value" => "",
         "description" => __("Add icon from online source, find class name here: http://oceanthemes.net/font-icons/archi/elegant_font/ and http://oceanthemes.net/font-icons/archi/et-line-font/", 'archi'),
         'dependency' => array(
            'element' => 'reasons_type',
            'value' => 'icon_online',
         ),
      ),
      array(
         'type' => 'iconpicker',
         'heading' => __( 'Add icon from library', 'archi' ),
         'param_name' => 'icon_fontawesome',
         'value' => '',
         'settings' => array(
            'emptyIcon' => false, // default true, display an "EMPTY" icon?
            'iconsPerPage' => 4000, // default 100, how many icons per/page to display
         ),         
         'description' => __( 'Select icon from library.', 'archi' ),
         'dependency' => array(
            'element' => 'reasons_type',
            'value' => 'icon_library',
         ),
      ),   
      array(
         "type"      => "colorpicker",
         "heading"   => __("Icon color", 'archi'),
         "param_name"=> "iconcolor",
         "value"     => "",
         "description" => __("Select icon color.", 'archi')
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'archi'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'archi')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'archi'),
         "param_name" => "content",
         "value" => "",
         "description" => __("Content right.", 'archi')
      ),
      array(
         'type' => 'css_editor',
         'heading' => __( 'CSS box', 'archi' ),
         'param_name' => 'css',
         // 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'archi' ),
         'group' => __( 'Design Options', 'archi' )
      ),       
    )));
}
 
// OT FAQs  
if(function_exists('vc_map')){
  vc_map( array(
    "name" => __( "OT FAQs", 'archi' ),
    "base" => "ot_faqs",
    "class" => "",
    "icon" => "icon-st",
    "category" => __( "Archi Elements", 'archi'),
    "params" => array(
       array(
          "type" => "textfield",
          "holder" => "div",
          "class" => "",
          "heading" => __( "Title", 'archi' ),
          "param_name" => "title",
          "value" => "",
          "description" => __( "Add your title FAQ.", 'archi' )
       ),
       array(
          "type" => "textarea_html",
          "holder" => "div",
          "class" => "",
          "heading" => __( "Content", 'archi' ),
          "param_name" => "content", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
          "value" => "",
          "description" => __( "Enter your content FAQ.", 'archi' )
       )
    )
  ) );
}

// OT Google Map
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Google Map", 'archi'),
   "base" => "ggmap",
   "class" => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params" => array(        
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height Map", 'archi'),
         "param_name" => "height",
         "value" => 320,
         "description" => __("Please enter number height Map, 300, 350, 380, ..etc. Default: 420.", 'archi')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Latitude", 'archi'),
         "param_name" => "lat",
         "value" => -6.373091,
         "description" => __("Please enter <a href='http://www.latlong.net/'>Latitude</a> google map", 'archi')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Longitude", 'archi'),
         "param_name" => "long",
         "value" => 106.835175,
         "description" => __("Please enter <a href='http://www.latlong.net/'>Longitude</a> google map", 'archi')

      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Zoom Map", 'archi'),
         "param_name" => "zoom",
         "value" => 15,
         "description" => __("Please enter Zoom Map, Default: 15", 'archi')
      ),    
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon Map marker",
         "param_name" => "icon",
         "value" => "",
         "description" => __("Icon Map marker, 85 x 85", 'archi')
      ),  
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select gmap style.", 'archi'),
         "param_name" => "style",
         "value" => array(                        
                     __('Style 1: Dark', 'archi') => 'dark',
                     __('Style 2: Light', 'archi') => 'light',
                     __('Customize Gmap Style', 'archi') => 'customize_gmap',
                    ),
         "description" => __("Select your style for gmap.", 'archi')
      ), 
    array(
          "type" => "textarea_raw_html",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__('JavaScript Code', 'archi'),
          "param_name" => "gmap_custom_style",
          "value" => "",
          "description" => __('Enter your JavaScript code, find your custom style gmap here:<a href="https://snazzymaps.com/explore" target="_blank">view more</a>', 'archi'),   
          "dependency"  => array( 'element' => 'style', 'value' => 'customize_gmap' ),   
    )       
    )));
}

// Multiple Google Maps
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __("OT Multiple Google Map", 'archi'),
   "base" => "multiggmap",
   "class" => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params" => array(        
		array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Height Map", 'archi'),
         "param_name" => "height",
         "value" => 320,
         "description" => __("Please enter number height Map, 300, 350, 380, ..etc. Default: 420.", 'archi')
		), 
		array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Add Button Text", 'archi'),
         "param_name" => "viewall_text",
         "value" => '',
         "description" => __("Please enter Button Text View All. Default: View All", 'archi')
		), 
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Active tab", 'archi'),
         "param_name" => "active_tab",
         "value" => '',
         "description" => __("Enter active tab number: 1, 2, etc... (Default show all the points (locations) on initial load).", 'archi')
    ), 
		// params group
		array(
          'type' => 'param_group',
          'heading' => 'Add Map Location(multiple field)',
          'value' => '',
          'param_name' => 'titles',
          // Note params is mapped inside param-group:
          'params' => array(
				array(
                  'type' => 'textfield',
                  "holder" => "div",
                  "class" => "",
                  'heading' => 'Enter your title(multiple field)',
                  'param_name' => 'title',
                  "value" => "",
                  "description" => __("Add Your Title Text", 'archi')
				),
				array(
                 "type" => "textfield",
                 "holder" => "div",
                 "class" => "",
                 "heading" => __("Latitude", 'archi'),
                 "param_name" => "lat",
                 "value" => -6.373091,
                 "description" => __("Please enter <a href='http://www.latlong.net/'>Latitude</a> google map", 'archi')
				),
				array(
                 "type" => "textfield",
                 "holder" => "div",
                 "class" => "",
                 "heading" => __("Longitude", 'archi'),
                 "param_name" => "long",
                 "value" => 106.835175,
                 "description" => __("Please enter <a href='http://www.latlong.net/'>Longitude</a> google map", 'archi')
				),
				array(
                 "type" => "textfield",
                 "holder" => "div",
                 "class" => "",
                 "heading" => __("Zoom Map", 'archi'),
                 "param_name" => "zoom",
                 "value" => 15,
                 "description" => __("Please enter Zoom Map, Default: 15", 'archi')
				),    
				array(
                 "type" => "attach_image",
                 "holder" => "div",
                 "class" => "",
                 "heading" => "Icon Map marker",
                 "param_name" => "icon",
                 "value" => "",
                 "description" => __("Icon Map marker, 85 x 85", 'archi')
				),
				array(
                 "type" => "attach_image",
                 "holder" => "div",
                 "class" => "",
                 "heading" => "Image Office",
                 "param_name" => "img_office",
                 "value" => "",
                 "description" => __("Image of your branch.", 'archi')
				),
				array(
                 "type" => "textfield",
                 "holder" => "div",
                 "class" => "",
                 "heading" => __("Map Info: Branch name", 'archi'),
                 "param_name" => "branch",
                 "value" => "",
                 "description" => __("Please enter branch name.", 'archi')
				), 
				array(
                 "type" => "textfield",
                 "holder" => "div",
                 "class" => "",
                 "heading" => __("Map Info: Address", 'archi'),
                 "param_name" => "address",
                 "value" => "",
                 "description" => __("Please enter address.", 'archi')
				), 
				array(
                 "type" => "textfield",
                 "holder" => "div",
                 "class" => "",
                 "heading" => __("Map Info: Phone number", 'archi'),
                 "param_name" => "phone",
                 "value" => "",
                 "description" => __("Please enter phone number.", 'archi')
				),  
				array(
                 "type" => "textfield",
                 "holder" => "div",
                 "class" => "",
                 "heading" => __("Map Info: Fax number", 'archi'),
                 "param_name" => "fax",
                 "value" => "",
                 "description" => __("Please enter fax number.", 'archi')
				),
				array(
                 "type" => "textfield",
                 "holder" => "div",
                 "class" => "",
                 "heading" => __("Map Info: Email", 'archi'),
                 "param_name" => "email",
                 "value" => "",
                 "description" => __("Please enter email address.", 'archi')
				),
				array(
                 "type" => "textfield",
                 "holder" => "div",
                 "class" => "",
                 "heading" => __("Map Info: Website", 'archi'),
                 "param_name" => "website",
                 "value" => "",
                 "description" => __("Please enter website address.", 'archi')
				),
			)                
		),
		array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select gmap style.", 'archi'),
         "param_name" => "style",
         "value" => array(                        
                     __('Style 1: Dark', 'archi') => 'dark',
                     __('Style 2: Light', 'archi') => 'light',
                     __('Customize Gmap Style', 'archi') => 'customize_gmap',
                    ),
         "description" => __("Select your style for gmap.", 'archi')
		), 
		array(
          "type" => "textarea_raw_html",
          "heading" => esc_html__('JavaScript Code', 'archi'),
          "param_name" => "gmap_custom_style",
          "value" => "",
          "description" => __('Enter your JavaScript code, find your custom style gmap here:<a href="https://snazzymaps.com/explore" target="_blank">view more</a>', 'archi'),   
          "dependency"  => array( 'element' => 'style', 'value' => 'customize_gmap' ),   
		)       
    )));
}

// OT Masonry Image Gallery
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Masonry Image Gallery", 'archi'),
   "base"      => "ot_masonry_image_glallery",
   "class"     => "",
   "icon" => "icon-st",
   "category" => __( "Archi Elements", 'archi'),
   "params"    => array(   
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Images Gallery",
         "param_name" => "gallery",
         "value" => "",
         "description" => __("Add images gallery and change image title name in <code>title</code> of image, add link the images to a specific page <code>caption</code> of image.", 'archi')
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "columns",
         "value" => array(                       
                     __('Columns 5', 'archi') => 5,         
                     __('Columns 4', 'archi') => 4,
                     __('Columns 3', 'archi') => 3,
                     __('Columns 2', 'archi') => 2,
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),        
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "edit_field_class" => "vc_col-sm-6",
         "heading" => __("Select Columns.", 'archi'),
         "param_name" => "style",
         "value" => array(                       
                     __('None', 'archi') => 'none',         
                     __('Open Popup', 'archi') => 'popup',
                    ),
         "description" => __("Select number columns for show.", 'archi')
      ),    
    )));
}
?>