<?php

namespace Skaisser\Organizze\Api;

// Entities
use Skaisser\Organizze\Entity\Category as CategoryEntity;

/**
 * Category API Endpoint.
 *
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
class Category extends \Skaisser\Organizze\Api\AbstractApi
{
    /**
     * Get all Categories.
     *
     * @return array Category Array
     */
    public function getAll()
    {
        $categories = $this->adapter->get(sprintf('%s/categories', $this->endpoint));

        $categories = json_decode($categories);

        return array_map(function ($category) {
            return new CategoryEntity($category);
        }, $categories);
    }

    /**
     * Get Category by Id.
     *
     * @param int $id Category Id
     *
     * @return CategoryEntity
     */
    public function getById($id)
    {
        $category = $this->adapter->get(sprintf('%s/categories/%s', $this->endpoint, $id));

        $category = json_decode($category);

        return new CategoryEntity($category);
    }

    /**
     * Delete Category by Id.
     *
     * @param int $id Category Id
     *
     * @return bool
     */
    public function deleteById($id)
    {
        $category = $this->adapter->delete(sprintf('%s/categories/%s', $this->endpoint, $id));

        $category = json_decode($category);

        return $category->deleted;
    }

    /**
     * Create a new Category.
     *
     * @param array $data
     *
     * @return bool
     */
    public function create(array $data)
    {
        $category = $this->adapter->post(sprintf('%s/categories', $this->endpoint), $data);
        $category = json_decode($category);

        return new CategoryEntity($category);
    }

    /**
     * Update a Category Category.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data)
    {
        $category = $this->adapter->put(sprintf('%s/categories/%s', $this->endpoint, $id), $data);
        $category = json_decode($category);

        return new CategoryEntity($category);
    }
}
