<?php

use App\Models\Campaign;

class CampaignTest extends TestCase
{
    /** @test */
    public function it_can_be_created()
    {
        Campaign::create([
            'title' => 'Some sample campaign',
            'slug' => 'sample-campaign',
        ]);

        $this->seeInDatabase('campaign_translations', [
            'locale' => 'en',
            'title' => 'Some sample campaign',
        ]);
    }

    /** @test */
    public function it_can_be_translated_to_spanish()
    {
        $campaign = Campaign::create([
            'slug' => 'teens-for-nami',
            'en' => [
                'title' => 'Teens for Nami',
            ],
            'es-MX' => [
                'title' => 'Jovenes para Nami',
            ],
        ]);

        // It should default to English.
        $this->assertEquals($campaign->title, 'Teens for Nami');

        // And it should return the right translation when in Mexico!
        app()->setLocale('es-MX');
        $this->assertEquals($campaign->title, 'Jovenes para Nami');
    }

    /** @test */
    public function it_should_track_revisions()
    {

    }
}
