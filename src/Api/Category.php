<?php

namespace Skaisser\Organizze\Api;

// Entities

/**
 * Category API Endpoint.
 *
 * @author Shirleyson Kaisser <skaisser@gmail.com>
 */
class Category extends Skaisser\Organizze\Api\AbstractApi
{
    /**
     * Get all Categories.
     *
     * @param array $filters (optional) Filters Array
     *
     * @return array Cities Array
     */
    public function getAll(array $filters = [])
    {
        $categories = $this->adapter->get(sprintf('%s/categories?%s', $this->endpoint, http_build_query($filters)));

        $categories = json_decode($categories);

        $this->extractMeta($categories);

        return array_map(function ($category) {
            return new CategorEntity($category);
        }, $categories->data);
    }

    /**
     * Get City By Id.
     *
     * @param int $id City Id
     *
     * @return CityEntity
     */
    public function getById($id)
    {
        $city = $this->adapter->get(sprintf('%s/cities/%s', $this->endpoint, $id));

        $city = json_decode($city);

        return new CityEntity($city);
    }
}
