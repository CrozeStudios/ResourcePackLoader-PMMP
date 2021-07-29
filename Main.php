<?php

/**
 * 
 *
 * 
 * 
 *
 * 
 * 
 *
 *██████╗░░█████╗░░█████╗░██╗░░██╗
 *██╔══██╗██╔══██╗██╔══██╗██║░██╔╝
 *██████╔╝███████║██║░░╚═╝█████═╝░
 *██╔═══╝░██╔══██║██║░░██╗██╔═██╗░
 *██║░░░░░██║░░██║╚█████╔╝██║░╚██╗
 *╚═╝░░░░░╚═╝░░╚═╝░╚════╝░╚═╝░░╚═╝
 *
 * 
 * 
 * Pack is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Pack is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Pack. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace arthur\Pack;

use arthur\Pack\generator\SimpleResourcePack;
use arthur\Pack\manifest\Version;
use arthur\Pack\ResourcePack;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase
{
    public function onEnable(): void
    {
        //Keep "resourcepack.zip"; the same way or it wont work :)
        $resourcePackPath = $this->getDataFolder() . "resourcepack.zip";
        //Generate the ResourcePack.
        $pack = new SimpleResourcePack($this, new Version(1, 0, 0));
        //Uncomment this then Use $addFile Here
        //Uncomment this then Use $setPackIcon Here
        $pack->generate($resourcePackPath);
        //Register the ResourcePack.
        ResourcePack::register($resourcePackPath);
    }

}
