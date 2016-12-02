<?php

use App\Models\Campaign;

class CampaignTest extends TestCase
{
    /** @test */
    public function it_can_be_created()
    {
        $campaign = Campaign::create([
            'title' => 'Some sample campaign',
            'slug' => 'sample-campaign',
        ]);

        $this->seeInDatabase('campaigns', [
            'title' => 'Some sample campaign'
        ]);
    }

    /** @test */
    public function it_can_be_translated()
    {
        $campaign = Campaign::create([
            'title' => 'Some sample campaign',
            'slug' => 'sample-campaign',
        ]);

        $campaign->translate('es')->title = 'Un exemplo de una campaña';

        $this->assertEquals($campaign->translate('es')->title, 'Un exemplo de una campaña');
        $this->assertEquals($campaign->translate('en')->title, 'Some sample campaign');
    }
}
