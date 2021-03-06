<?php
/**
 * Image Vote Public Class
 *
 * @copyright   
 * @link        
 * @package     WP Image Vote
 * @version     
 */
class ImageVotePublic extends ImageVote {

    function header_contents() {
    }

    function footer_contents() {
    }

    function execute($manage_id) {
        //モデルの設定をする
        $this->model = ImageVotePublicModel::getContents($manage_id);
        //template描画
        $this->exec('public_contents');
    }

    function execute_question($question_list) {
        //モデルの設定をする
        $this->model = $question_list;
        //template描画
        $this->exec('public_question');
    }
}
