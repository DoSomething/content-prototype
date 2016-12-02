<?php

use App\Models\Campaign;

class CampaignTest extends TestCase
{
    /** @test */
    public function it_can_be_created()
    {
        $campaign = Campaign::create([
            'title' => 'Some sample campaign',
        ]);

        $this->seeInDatabase('campaigns', [
            'title' => 'Some sample campaign'
        ]);
    }

        /** @test */
    public function it_works()
    {
        $this->notSeeInDatabase('campaigns', [
            'title' => 'Some sample campaign'
        ]);
    }
}
