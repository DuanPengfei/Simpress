<?php
class Comment extends Eloquent {
	protected $fillable = array('content', 'article_id', 'user');
}
