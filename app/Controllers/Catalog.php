<?php

namespace App\Controllers;

/**
 * A small in-memory catalog keeps this assessment project easy to understand.
 * Product data can move into a model and database when the shop grows.
 */
class Catalog extends BaseController
{
    public function index(): string
    {
        $filters = [
            'all' => 'All gear',
            'paddles' => 'Paddles',
            'balls' => 'Balls',
            'bags' => 'Bags',
            'grips' => 'Grips',
            'protection' => 'Edge tape',
            'footwear' => 'Court shoes',
            'apparel' => 'Apparel',
            'accessories' => 'Accessories',
        ];
        $products = [
            [
                'name' => 'The Rally Control',
                'category' => 'Paddles',
                'filter' => 'paddles',
                'price' => 4890,
                'image' => 'paddle-control.webp',
                'alt' => 'Graphite and cream pickleball paddle with a forest green accent',
                'description' => 'A forgiving all-court paddle with a generous sweet spot and a steady, comfortable feel.',
                'options' => ['Standard grip · 4 1/8 in', 'Small grip · 4 in', 'Large grip · 4 1/4 in'],
                'optionLabel' => 'Grip size',
                'badge' => 'PLAYER FAVORITE',
            ],
            [
                'name' => 'The Rally Power',
                'category' => 'Paddles',
                'filter' => 'paddles',
                'price' => 5690,
                'image' => 'paddle-power.webp',
                'alt' => 'Modern carbon pickleball paddle ready for the court',
                'description' => 'A slightly head-weighted shape for confident drives, with a textured face for added spin.',
                'options' => ['Standard grip · 4 1/8 in', 'Small grip · 4 in', 'Large grip · 4 1/4 in'],
                'optionLabel' => 'Grip size',
                'badge' => 'MORE PUT-AWAY',
            ],
            [
                'name' => 'Outdoor Rally Balls',
                'category' => 'Balls',
                'filter' => 'balls',
                'price' => 690,
                'image' => 'pickleballs.webp',
                'alt' => 'Bright optic-yellow perforated pickleballs',
                'description' => 'Consistent outdoor bounce and easy-to-spot color. Four durable balls per pack.',
                'options' => ['Outdoor · 4-ball pack', 'Indoor · 4-ball pack'],
                'optionLabel' => 'Ball type',
                'badge' => 'COURT ESSENTIAL',
            ],
            [
                'name' => 'The Court Duffel',
                'category' => 'Bags',
                'filter' => 'bags',
                'price' => 3290,
                'image' => 'court-duffel.webp',
                'alt' => 'Forest green court duffel bag with cream trim',
                'description' => 'Room for paddles, shoes, and a change of clothes, with a quick-access side pocket.',
                'options' => ['Forest', 'Sand'],
                'optionLabel' => 'Color',
                'badge' => 'READY TO RALLY',
            ],
            [
                'name' => 'Comfort Overgrip',
                'category' => 'Grips',
                'filter' => 'grips',
                'price' => 390,
                'image' => 'grip-edge-tape.webp',
                'alt' => 'Soft-touch pickleball overgrip rolls in cream and forest green',
                'description' => 'A soft, absorbent overgrip that refreshes your handle and helps keep your hold secure.',
                'options' => ['Forest', 'Cream', 'Clay'],
                'optionLabel' => 'Color',
                'badge' => 'SMALL UPGRADE',
            ],
            [
                'name' => 'Paddle Edge Guard',
                'category' => 'Edge tape',
                'filter' => 'protection',
                'price' => 450,
                'image' => 'paddle-edge-tape.webp',
                'alt' => 'Protective pickleball paddle edge tape laid out on a studio surface',
                'description' => 'Flexible protective tape helps shield your paddle edge from scrapes and court scuffs.',
                'options' => ['Black · ½ in', 'Clear · ½ in', 'Clay · ½ in'],
                'optionLabel' => 'Color and width',
                'badge' => 'PADDLE CARE',
            ],
            [
                'name' => 'Baseline Court Shoes',
                'category' => 'Court shoes',
                'filter' => 'footwear',
                'price' => 4290,
                'image' => 'court-shoes.webp',
                'alt' => 'Ivory and forest green indoor court shoes with gum soles',
                'description' => 'Stable lateral support and a grippy non-marking sole for quick changes of direction.',
                'options' => ['US 6', 'US 7', 'US 8', 'US 9', 'US 10', 'US 11'],
                'optionLabel' => 'Size',
                'badge' => 'COURT READY',
            ],
            [
                'name' => 'Every Point Performance Set',
                'category' => 'Apparel',
                'filter' => 'apparel',
                'price' => 2490,
                'image' => 'court-apparel.webp',
                'alt' => 'Folded forest green and warm ivory pickleball performance apparel',
                'description' => 'Lightweight, breathable layers made for warm-ups, long rallies, and the walk home.',
                'options' => ['XS', 'S', 'M', 'L', 'XL'],
                'optionLabel' => 'Size',
                'badge' => 'MOVE FREELY',
            ],
            [
                'name' => 'Court Day Accessory Kit',
                'category' => 'Accessories',
                'filter' => 'accessories',
                'price' => 1590,
                'image' => 'court-accessories.webp',
                'alt' => 'Court day accessories including an ivory towel, green wristbands, and a sage water bottle',
                'description' => 'A quick-dry towel, soft wristbands, and an insulated bottle for the little things between points.',
                'options' => ['Sage bottle set', 'Forest bottle set'],
                'optionLabel' => 'Set color',
                'badge' => 'THE EXTRAS',
            ],
        ];

        $requestedFilter = $this->request->getGet('category');
        $activeFilter = is_string($requestedFilter) ? $requestedFilter : 'all';
        if (! array_key_exists($activeFilter, $filters)) {
            $activeFilter = 'all';
        }
        $visibleProducts = $activeFilter === 'all'
            ? $products
            : array_values(array_filter(
                $products,
                static fn (array $product): bool => $product['filter'] === $activeFilter,
            ));

        return view('pages/shop', [
            'title' => 'Pickleball gear and accessories',
            'filters' => $filters,
            'activeFilter' => $activeFilter,
            'products' => $visibleProducts,
        ]);
    }
}
