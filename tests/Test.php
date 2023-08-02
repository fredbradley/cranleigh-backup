<?php
declare(strict_types=1);

test('confirm config is loaded', function () {
    expect(config('cranleigh-backup'))->toBeArray();
});

test('test function', function () {
    $class = new \FredBradley\CranleighBackup\CranleighBackup();
    expect($class->test())->toBeTrue();
});
test('facade', function () {
    expect(\FredBradley\CranleighBackup\CranleighBackupFacade::test())->toBeTrue();
});
test('if app url is not a string', function () {
    \Illuminate\Support\Facades\Config::set('app.url', 3566);
    \FredBradley\CranleighBackup\CranleighBackupServiceProvider::getHostname();
})->throws(\Exception::class);
test('if app url does not contain a host', function () {
    \Illuminate\Support\Facades\Config::set('app.url', 'faketest');
    \FredBradley\CranleighBackup\CranleighBackupServiceProvider::getHostname();
})->throws(\Exception::class);
