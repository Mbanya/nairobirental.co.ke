<?php

test('home page shows the coming soon placeholder', function () {
    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('Nairobi Rental', false)
        ->assertSee('Coming Soon', false)
        ->assertSee('wendyojiro@gmail.com', false)
        ->assertSee('+254 716 516 178', false)
        ->assertSee('https://wa.me/254716516178', false);
});
