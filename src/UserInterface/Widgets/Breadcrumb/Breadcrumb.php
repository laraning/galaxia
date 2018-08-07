<?php

namespace Laraning\Galaxia\UserInterface\Widgets\Breadcrumb;

class Breadcrumb
{
    /**
     * Collection with the links to render the breadcrumb.
     *
     * @var Illuminate\Support\Collection
     */
    protected $links;

    /**
     * HTML that is the result of the links construction.
     *
     * @var string
     */
    protected $html;

    protected function links()
    {
        return is_null($this->links) ? $this->links = collect() : $this->links;
    }

    /**
     * Adds a link in the collection.
     *
     * @param mixed The feature to be used as a link. Can be a Feature route instance, an instance of BreadCrumbLinkRenderer,
     * or an array with ['label' => , 'link' => ].
     * @param int The position where the feature will be added in the collection. In case it's null, it's appended to the end.
     */
    public function addLink(BreadCrumbLink $bcLink, $position = null)
    {
        $this->links()->addAt($bcLink, $position);
    }

    /**
     * Adds a non link to the breadcrumb.
     */
    protected function addNonLink($label)
    {
        $this->links()->push(new BreadCrumbLink($label));
    }

    /**
     * Generates links and description as a Laravel collection.
     * After calling this method, you can change the BreadCrumb::$links to add/change/remove your own links.
     * Just pass a key with the uri, and the value as the description for the breadcrumb label.
     * Also, the links generation removes all the {xxx} to the segments.
     */
    public function generateLinks()
    {
        // Get current resource without segment bindings.
        $segments = get_uri_collection_without_bindings();

        // Recreate segments by removing the first segments that belong to the route prefix.
        $segments = $segments->slice(config('galaxia.widgets.breadcrumb.prefix.delete-indexes'));

        // Add non-links to breadcrumb.
        foreach ($segments as $key => $item) {
            $this->addNonLink(trans('galaxia-text::breadcrumb.'.$item));
        }

        return $this->links();
    }
}
