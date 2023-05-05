<?php

namespace Tests\Feature;

use App\Models\Kandidat\KandidatKetua;
use App\Models\User;
use App\Models\User\Siswa;
use App\Models\Vote\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class testVoteKetua extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testVoteKetua()
    {
        // Create a user and authenticate
        $user = User::factory()->create();
        $this->actingAs($user);

        // Create a siswa associated with the user
        $siswa = Siswa::factory()->create(['user_id' => $user->id]);

        // Create two kandidat ketua
        $kandidat1 = KandidatKetua::factory()->create();
        $kandidat2 = KandidatKetua::factory()->create();

        // Create a vote for the siswa with kandidat1
        $vote = Vote::factory()->create([
            'siswa_id' => $siswa->id,
            'kandidat_ketua_id' => $kandidat1->id,
        ]);

        // Make a request to the vote_ketua endpoint with kandidat2 id
        $response = $this->put(route('user.murid.vote_ketua'), ['idketua' => $kandidat2->id]);

        // Assert that the response is a redirect to the wakil page
        $response->assertRedirect(route('user.murid.wakil'));

        // Assert that the vote for kandidat1 has been updated to kandidat2
        $this->assertDatabaseHas('votes', [
            'id' => $vote->id,
            'kandidat_ketua_id' => $kandidat2->id,
        ]);
    }
}
