<?php

    class Box
    {
        /**
         * @var array
         */
        protected $items = [];

        /**
         * Construct the box with the given items.
         *
         * @param array $items
         */
        public function __construct($items = [])
        {
            $this->items = $items;
        }

        /**
         * Check if the specified item is in the box.
         *
         * @param string $item
         * @return bool
         */
        public function has($item)
        {
            return in_array($item, $this->items);
        }

        /**
         * Remove an item from the box, or null if the box is empty.
         *
         * @return string
         */
        public function takeOne()
        {
            // echo "Se ha tomado uno";
            return array_shift($this->items);
        }

    }
?>
