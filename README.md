## Start local server
http://localhost/shunmare/wp-admin/

## Query
UPDATE wp_term_relationships 
SET object_id = (SELECT ID FROM wp_posts WHERE post_type = 'blog' AND ID = object_id) 
WHERE object_id IN (SELECT ID FROM wp_posts WHERE post_type = 'blog');
UPDATE wp_posts SET post_type = 'blog' WHERE post_type = 'post';

UPDATE wp_term_taxonomy
SET taxonomy = 'news-category'
WHERE taxonomy = 'category-news';