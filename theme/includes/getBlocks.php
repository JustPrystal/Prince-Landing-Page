<?php
  function get_blocks() {
    global $post;

    $fields = get_fields($post->ID);
    loop_blocks($fields);
  }

  function loop_blocks($blocks) {
    if (isset($blocks['blocks'])){
      if ($blocks['blocks']){
        foreach ($blocks['blocks'] as $key => $block) {
          switch ($block['acf_fc_layout']) {
            case 'global_block':
              if ($block['global_block']){
                $blocks = get_fields($block['global_block'][0]);
                loop_blocks($blocks);
              }
              break;
            case 'fullwidth_text':
              include 'blocks/fullwidth_text.php';
              break;
            case 'hero':
              include 'blocks/hero.php';
              break;
            case 'returns':
              include 'blocks/returns.php';
              break;
            case 'conversions':
              include 'blocks/conversions.php';
              break;
            case 'sales':
              include 'blocks/sales.php';
              break;
            case 'shopify':
              include 'blocks/shopify.php';
              break;
            
          }
        }
      }
    }
  }

?>