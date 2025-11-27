<?php

it('does something', function() {
    visit('/playground')
        ->debug()
        ->attach('input[type="file"]', '/Users/josh/TestSites/fluxqa/tests/fixtures/test.png')
        ->screenshot()
        ->assertSee('Welcome')
        ->wait(30);
});
