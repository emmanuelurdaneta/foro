<?php


class ExampleTest extends FeatureTestCase
{
    
    /**
     * A basic functional test example.
     *
     * @return void
     */    
    
    function test_basic_example()
    {
//         $this->visit('/')
//              ->see('Laravel');
        $user = factory(\App\User::class)->create([
                'name' => 'emmanuel',
                'email' => 'admin@styde.net'
        ]);
        
        $this->actingAs($user,'api')
                ->visit('api/user')
                ->see('emmanuel')
                ->see('admin@styde.net');
    }
}
