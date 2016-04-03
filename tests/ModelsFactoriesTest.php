<?php
/**
 *
 * @author malinink
 */
use App\User;
use App\GameType;
use App\Game;

use App\UserIngameInfo;

class ModelsFactoriesTest extends TestCase
{
    /**
     * Test User Factory
     *
     * @return void
     */
    public function testUserFactory()
    {
        $user = factory(User::class)->create();
        $user->delete();
    }

    /**
     * Test GameType Factory
     *
     * @return void
     */
    public function testGameTypeFactory()
    {
        $gameType = factory(GameType::class)->create();
        $gameType->delete();
    }
    
    /**
     * Test Game Factory
     *
     * @return void
     */
    public function testGameFactory()
    {
        $game = factory(Game::class)->create();
        $game->delete();
        /*
         * Delete related autogenerated models also
         */
        $game->gameType->delete();
    }
    
    /**
     * Test UserIngameInfo Factory
     *
     * @return void
     */
    public function testUserIngameInfoFactory()
    {
        $user_ingame = factory(UserIngameInfo::class)->make();
        $user_ingame->save();
        $user_ingame->delete();
        /*
         * Delete related autogenerated models also
         */
        $user_ingame->gameType->delete();
        $user_ingame->user->delete();
    }
    
    /**
     * Test BoardInfo Factory
     *
     * @return void
     */
    public function testBoardInfoFactory()
    {
        $boardInfo = factory(BoardInfo::class)->make();
        $boardInfo->save();
        $boardInfo->delete();
        $game = $boardInfo->game;
        /*
         * Delete related autogenerated models also
         */
        $boardInfo->game->delete();
        $game->gameType->delete();
    }
    
    /**
     * Test TurnInfo Factory
     *
     * @return void
     */
    public function testTurnInfoFactory()
    {
        $turnInfo = factory(TurnInfo::class)->make();
        $turnInfo->save();
        $turnInfo->delete();
        $game = $turnInfo->game;
        /*
         * Delete related autogenerated models also
         */
        $turnInfo->game->delete();
        $game->gameType->delete();
    }
    
    /**
     * Test UserGame Factory
     *
     * @return void
     */
    public function testUserGameFactory()
    {
        $userGame = factory(UserGame::class)->make();
        $userGame->save();
        $userGame->delete();
        /*
         * Delete related autogenerated models also
         */
        $userGame->game->delete();
        $userGame->user->delete();
    }
}
