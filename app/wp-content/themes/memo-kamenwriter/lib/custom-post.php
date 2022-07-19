<?php

add_theme_support('post-thumbnails');
add_action('init', 'remove_block_editor_options');
function remove_block_editor_options()
{
    remove_post_type_support('post', 'excerpt');  // 抜粋
    remove_post_type_support('post', 'trackbacks');// トラックバック
    remove_post_type_support('post', 'author');// 作成者
    remove_post_type_support('post', 'comments');// コメント
    remove_post_type_support('post', 'page-attributes'); // 表示順
    remove_post_type_support('post', 'post-formats');// 投稿フォーマット
    remove_post_type_support('page', 'page-attributes');
    remove_post_type_support('page', 'excerpt');  // 抜粋
    remove_post_type_support('page', 'trackbacks');// トラックバック
    remove_post_type_support('page', 'author');// 作成者
    remove_post_type_support('page', 'comments');// コメント
    remove_post_type_support('page', 'page-attributes'); // 表示順
}
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = esc_attr('memo');
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
function change_post_menu_label()
{
    global $menu;
    global $submenu;
    $menu[5][0] = esc_attr('メモ');
    $submenu['edit.php'][5][0] = esc_attr('メモ一覧');
    $submenu['edit.php'][10][0] = '新しい' . esc_attr('メモ');
    $submenu['edit.php'][16][0] = 'タグ';
}

function change_post_object_label()
{
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = esc_attr('メモ');
    $labels->singular_name = esc_attr('メモ');
    $labels->add_new = _x('追加', esc_attr('メモ'));
    $labels->add_new_item = esc_attr('メモ') . 'の新規追加';
    $labels->edit_item = esc_attr('メモ') . 'の編集';
    $labels->new_item = '新規' . esc_attr('メモ');
    $labels->view_item = esc_attr('メモ') . 'を表示';
    $labels->search_items = esc_attr('メモ') . 'を検索';
    $labels->not_found = 'メモが見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱にメモは見つかりませんでした';
}
add_action('init', 'change_post_object_label');
add_action('admin_menu', 'change_post_menu_label');

function add_my_box()
{
    add_meta_box('meta_info', 'SEO', 'meta_info_form', 'post', 'normal');
}
add_action('admin_menu', 'add_my_box');

function meta_info_form()
{
    global $post;
    $keywords = get_post_meta($post->ID, 'meta_keywords', true);
    $description = get_post_meta($post->ID, 'meta_description', true);
    $content_title = get_post_meta($post->ID, 'content_title', true);
    $content_pub = get_post_meta($post->ID, 'content_pub', true);
    $content_author = get_post_meta($post->ID, 'content_author', true);
    $content_date = get_post_meta($post->ID, 'content_date', true);
    $content_r_title = get_post_meta($post->ID, 'content_r_title', true);
    $content_url = get_post_meta($post->ID, 'content_url', true);
    $memo_status = get_post_meta($post->ID, 'memo_status', true);
    $status_check = ($memo_status) ? "checked" : ""; ?>
<h3 style="font-size: 14px; margin: 0 0 8px;">キーワード</h3>
<input type="text" name="meta_keywords"
    value="<?php echo esc_html($keywords); ?>"
    style="width: 100%;margin: 0 0 8px;" />
<p style="color:#666; font-size: 13px; line-height: 1.68; margin: 0">キーワードが複数ある場合はコンマで区切ってください</p>
<h3 style="font-size: 14px; margin: 8px 0;padding: 8px 0 0;border-top:1px solid #ccd0d4;">ディスクリプション（抜粋兼用） <span
        style="color:#666; font-size: 13px">※200文字以上は省略されます。</span></h3>
<textarea id="meta_description" name="meta_description" rows="1" cols="40"
    style="width: 100%; height: 60px"><?php echo htmlspecialchars($description); ?></textarea>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        var maxcount = 200;
        $('#meta_description').after(
            '<p style=\"color:#666; font-size: 13px; margin: 0\">文字数: <span id=\"description-count\"></span></p>'
        );
        $('#description-count').text($('#meta_description').val().replace(/\s+/g, '').length);
        if ($('#meta_description').val().replace(/\s+/g, '').length > maxcount) {
            $('#description-count').css('color', '#f00');
        } else {
            $('#description-count').css('color', '#666');
        }
        $('#meta_description').bind("keydown keyup keypress change", function() {
            $('#description-count').text($('#meta_description').val().replace(/\s+/g, '').length);
            if ($(this).val().replace(/\s+/g, '').length > maxcount) {
                $('#description-count').css('color', '#f00');
            } else {
                $('#description-count').css('color', '#666');
            }
        });
        $('.categorychecklist>li:first-child, .cat-checklist>li:first-child').before(
            '<p style="font-size: 14px; margin: 0 0 8px;">※ 複数選んでも、表示は1つです。</p>');
    });
</script>
<h3 style="font-size: 14px; margin: 0 0 8px;">コンテンツタイトル</h3>
<input type="text" name="content_title"
    value="<?php echo esc_html($content_title); ?>"
    style="width: 100%;margin: 0 0 8px;" />
<h3 style="font-size: 14px; margin: 0 0 8px;">版元</h3>
<input type="text" name="content_pub"
    value="<?php echo esc_html($content_pub); ?>"
    style="width: 100%;margin: 0 0 8px;" />
<h3 style="font-size: 14px; margin: 0 0 8px;">制作者</h3>
<input type="text" name="content_author"
    value="<?php echo esc_html($content_author); ?>"
    style="width: 100%;margin: 0 0 8px;" />
<h3 style="font-size: 14px; margin: 0 0 8px;">公開日</h3>
<input type="text" name="content_date"
    value="<?php echo esc_html($content_date); ?>"
    style="width: 100%;margin: 0 0 8px;" />
<p style="color:#666; font-size: 13px; line-height: 1.68; margin: 0">YYYY-mm-dd形式で入力してください
<h3 style="font-size: 14px; margin: 0 0 8px;">関連タイトル</h3>
<input type="text" name="content_r_title"
    value="<?php echo esc_html($content_r_title); ?>"
    style="width: 100%;margin: 0 0 8px;" />
<h3 style="font-size: 14px; margin: 0 0 8px;">URL</h3>
<input type="text" name="content_url"
    value="<?php echo esc_html($content_url); ?>"
    style="width: 100%;margin: 0 0 8px;" />
<h3 style="font-size: 14px; margin: 0 0 8px;">作業完了</h3>
<div>
    <label>
        <input type="checkbox" name="memo_status" value="作業完了" <?php echo $status_check; ?>>作業完了
    </label>
</div>
<?php
}
function save_meta_info($post_id)
{
    if (isset($_POST['meta_keywords'])) {
        update_post_meta($post_id, 'meta_keywords', $_POST['meta_keywords']);
    } else {
        delete_post_meta($post_id, 'meta_keywords');
    }
    if (isset($_POST['meta_description'])) {
        update_post_meta($post_id, 'meta_description', $_POST['meta_description']);
    } else {
        delete_post_meta($post_id, 'meta_description');
    }
    if (isset($_POST['content_title'])) {
        update_post_meta($post_id, 'content_title', $_POST['content_title']);
    } else {
        delete_post_meta($post_id, 'content_title');
    }
    if (isset($_POST['content_pub'])) {
        update_post_meta($post_id, 'content_pub', $_POST['content_pub']);
    } else {
        delete_post_meta($post_id, 'content_pub');
    }
    if (isset($_POST['content_author'])) {
        update_post_meta($post_id, 'content_author', $_POST['content_author']);
    } else {
        delete_post_meta($post_id, 'content_author');
    }
    if (isset($_POST['content_date'])) {
        update_post_meta($post_id, 'content_date', $_POST['content_date']);
    } else {
        delete_post_meta($post_id, 'content_date');
    }
    if (isset($_POST['content_r_title'])) {
        update_post_meta($post_id, 'content_r_title', $_POST['content_r_title']);
    } else {
        delete_post_meta($post_id, 'content_r_title');
    }
    if (isset($_POST['content_url'])) {
        update_post_meta($post_id, 'content_url', $_POST['content_url']);
    } else {
        delete_post_meta($post_id, 'content_url');
    }
    if (isset($_POST['memo_status'])) {
        update_post_meta($post_id, 'memo_status', $_POST['memo_status']);
    } else {
        delete_post_meta($post_id, 'memo_status');
    }
}
add_action('save_post', 'save_meta_info');

function get_post_views($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count . '';
}

function set_post_views($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count ++;
        update_post_meta($postID, $count_key, $count);
    }
}
