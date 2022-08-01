<?php
/**
 * 
 * Custom Rewrite block to set the permalinks as follows:
 * So the following become available:
 * {site.com}/news/                               - (news.php - page template)       EG: mysite.com/news/
 * {site.com}/news/{category_name}                - (archive.php - standard template) EG: mysite.com/news/my-category/ - same as before
 * {site.com}/news/{category_name}/{post_slug}    - (single.php - standard template  EG: mysite.com/news/my-category/my-news-post/ - before:
 * {site.com}/news/{archive_year}                 - (archive.php - standard template) EG: mysite.com/news/2021/
 * 
 * So with every step when the URL is stripped by one level something always loads.
 */

//Get Archives in an array format
function wp_get_archives_array() {
    $years = array();
    $years_args = array(
      'type' => 'yearly',
      'format' => 'custom',
      'before' => '',
      'after' => '|',
      'echo' => false,
      'post_type' => 'post',
      'order' => 'ASC'
    );
   
    // Get Years
    $years_content = wp_get_archives($years_args);
    if (!empty($years_content) ) {
      $years_arr = explode('|', $years_content);
      $years_arr = array_filter($years_arr, function($item) {
        return trim($item) !== '';
      }); // Remove empty whitespace item from array
   
      foreach($years_arr as $year_item) {
        $year_row = trim($year_item);
        preg_match('/href=["\']?([^"\'>]+)["\']>(.+)<\/a>/', $year_row, $year_vars);
   
        if (!empty($year_vars)) {
          $years[] = array(
            'year' => $year_vars[2], // Ex: January 2020
            'url' => $year_vars[1] // Ex: http://demo.com/2020/01/
          );
        }
      }
    }
   
    return $years;
  }
  //Get Archives in an array format
  
  /**
   * Rewrite WordPress URLs to Include /news/ in Post Permalink Structure
   *
   * @author   Golden Oak Web Design <info@goldenoakwebdesign.com>
   * @license  https://www.gnu.org/licenses/gpl-2.0.html GPLv2+
   */
  function golden_oak_web_design_news_generate_rewrite_rules( $wp_rewrite ) {

    /******************************************/
    $prefix = 'news';
    //There is another $prefix variable to amend in another function below
    /******************************************/


    $new_rules = array(
      $prefix.'(([^/]+/)*'.$prefix.')/page/?([0-9]{1,})/?$' => 'index.php?pagename=$matches[1]&paged=$matches[3]',
      $prefix.'/([^/]+)/?$' => 'index.php?post_type=post&name=$matches[1]',
      $prefix.'/[^/]+/attachment/([^/]+)/?$' => 'index.php?post_type=post&attachment=$matches[1]',
      $prefix.'/[^/]+/attachment/([^/]+)/trackback/?$' => 'index.php?post_type=post&attachment=$matches[1]&tb=1',
      $prefix.'/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&attachment=$matches[1]&feed=$matches[2]',
      $prefix.'/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&attachment=$matches[1]&feed=$matches[2]',
      $prefix.'/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?post_type=post&attachment=$matches[1]&cpage=$matches[2]',		
      $prefix.'/[^/]+/attachment/([^/]+)/embed/?$' => 'index.php?post_type=post&attachment=$matches[1]&embed=true',
      $prefix.'/[^/]+/embed/([^/]+)/?$' => 'index.php?post_type=post&attachment=$matches[1]&embed=true',
      $prefix.'/([^/]+)/embed/?$' => 'index.php?post_type=post&name=$matches[1]&embed=true',
      $prefix.'/[^/]+/([^/]+)/embed/?$' => 'index.php?post_type=post&attachment=$matches[1]&embed=true',
      $prefix.'/([^/]+)/trackback/?$' => 'index.php?post_type=post&name=$matches[1]&tb=1',
      $prefix.'/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&name=$matches[1]&feed=$matches[2]',
      $prefix.'/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&name=$matches[1]&feed=$matches[2]',
      $prefix.'/page/([0-9]{1,})/?$' => 'index.php?post_type=post&paged=$matches[1]',
      $prefix.'/[^/]+/page/?([0-9]{1,})/?$' => 'index.php?post_type=post&name=$matches[1]&paged=$matches[2]',
      $prefix.'/([^/]+)/page/?([0-9]{1,})/?$' => 'index.php?post_type=post&name=$matches[1]&paged=$matches[2]',
      $prefix.'/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?post_type=post&name=$matches[1]&cpage=$matches[2]',
      $prefix.'/([^/]+)(/[0-9]+)?/?$' => 'index.php?post_type=post&name=$matches[1]&page=$matches[2]',
      $prefix.'/[^/]+/([^/]+)/?$' => 'index.php?post_type=post&attachment=$matches[1]',
      $prefix.'/[^/]+/([^/]+)/trackback/?$' => 'index.php?post_type=post&attachment=$matches[1]&tb=1',
      $prefix.'/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&attachment=$matches[1]&feed=$matches[2]',
      $prefix.'/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' => 'index.php?post_type=post&attachment=$matches[1]&feed=$matches[2]',
      $prefix.'/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$' => 'index.php?post_type=post&attachment=$matches[1]&cpage=$matches[2]',
    );
  
    //Create working re-writes for categories AND yearly archives
    $exceptions_rules = array();
  
    $categories = get_categories( array(
    'orderby' => 'name',
    'order' => 'ASC'
    ));
  
    $archives = wp_get_archives_array();
  
    
    //Loop throught the categories and archive years and create the rewrite rules for them
    foreach ( $categories as $category ) {
      $exceptions_rules[$prefix.'/'.$category->slug.'$'] = 'index.php?post_type=post&category_name='.$category->slug;
    }
    foreach ( $archives as $archive ) {
      $exceptions_rules[$prefix.'/'.$archive['year'].'$'] = 'index.php?post_type=post&year='.$archive['year'];
    }
  
    //Merge category and yearly archives to the above list of rewrites
    $merged_rules = array_merge($exceptions_rules, $new_rules);
    
    //Apply the rewrite
    $wp_rewrite->rules = $merged_rules + $wp_rewrite->rules;
  }
  add_action( 'generate_rewrite_rules', 'golden_oak_web_design_news_generate_rewrite_rules' );
  
  //Update the post permalinks
  function golden_oak_web_design_update_post_link( $post_link, $id = 0 ) {
    
    /******************************************/
    $include_category = false;
    $prefix = 'news';
    /******************************************/


    $post = get_post( $id );
    if( is_object( $post ) && $post->post_type == 'post' ) {
      $terms = get_the_terms($post->ID,'category');
      
      if($include_category == false):
        

        //Without category name so just /news/{news-post-slug}/
        return home_url( '/'.$prefix.'/'. $post->post_name );
      else:
        //With category name so /news/{category}/{new-post-slug}
        return home_url( '/'.$prefix.'/'. $terms[0]->slug  .'/'. $post->post_name  );
      endif;
    }
    return $post_link;
  }
  add_filter( 'post_link', 'golden_oak_web_design_update_post_link', 1, 3 );
  
  /**
   * 
   * END CUSTOM REWRITE BLOCK
   * 
   */