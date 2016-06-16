<?php

/*
 * This file is part of the Stinger Enity Search package.
 *
 * (c) Oliver Kotte <oliver.kotte@stinger-soft.net>
 * (c) Florian Meyer <florian.meyer@stinger-soft.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace StingerSoft\EntitySearchBundle\Model;

interface Document {

	/**
	 * Key of the index field <em>title</em>
	 *
	 * @var string
	 */
	const FIELD_TITLE = 'title';

	/**
	 * Key of the index field <em>content</em>
	 *
	 * @var string
	 */
	const FIELD_CONTENT = 'content';

	/**
	 * Key of the index field <em>last_modified</em>
	 *
	 * @var string
	 */
	const FIELD_LAST_MODIFIED = 'last_modified';

	/**
	 * Key of the index field <em>author</em>
	 *
	 * @var string
	 */
	const FIELD_AUTHOR = 'author';

	/**
	 * Key of the index field <em>keywords</em>
	 *
	 * @var string
	 */
	const FIELD_KEYWORDS = 'keywords';

	/**
	 * Key of the index field <em>roles</em>
	 *
	 * @var string
	 */
	const FIELD_ROLES = 'roles';

	/**
	 * Key of the index field <em>editors</em>
	 *
	 * @var string
	 */
	const FIELD_EDITORS = 'editors';

	/**
	 * Key of the index field <em>deleted_at</em> If set the entity will only appear in the search results until this date
	 *
	 * @var string
	 */
	const FIELD_DELETED_AT = 'deleted_at';

	/**
	 * Adds a field and its value to the index
	 *
	 * @param string $fieldname
	 *        	The name of the field
	 * @param mixed $value
	 *        	The value of this field
	 */
	public function addField($fieldname, $value);

	/**
	 * Adds a value to a field without deleting the already existing values
	 *
	 * @param string $field
	 *        	The name of the field
	 * @param ID $value
	 *        	The additional value of this field
	 */
	public function addMultiValueField($field, $value);

	/**
	 * Set the class name of the corresponding entity.
	 * This method will automatically be called by the doctrine event listener
	 *
	 * @internal
	 *
	 * @param string $clazz
	 *        	The classname
	 */
	public function setEntityClass($clazz);

	/**
	 * Get the classname of the corresponding entity
	 *
	 * @return string The classname of the corresponding entity
	 */
	public function getEntityClass();

	/**
	 * Set the ID of the corresponding entity.
	 *
	 * This method will automatically be called by the doctrine event listener
	 *
	 * @internal
	 *
	 * @param mixed $id
	 *        	The ID of the corresponding entity
	 */
	public function setEntityId($id);

	/**
	 * Get the ID of the corresponding entity
	 *
	 * @return mixed The ID of the corresponding entity
	 */
	public function getEntityId();
}