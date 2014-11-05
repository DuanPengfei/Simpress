<?php
class Article extends Eloquent {
	protected $fillable = array('title', 'content', 'user');

	public function comments() {
		return $this->hasMany('Comment');
	}
}
