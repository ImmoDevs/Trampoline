# Trampoline Plugin

[![Trampoline-PM5](https://img.shields.io/badge/Trampoline_PM5-v2.0.0-brightgreen.svg)](https://github.com/ImmoDevs/Trampoline-PM5)
[![LICENSE](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![VERSION](https://img.shields.io/badge/version-1.0.0-green.svg)](https://semver.org)
[![DOWNLOAD](https://img.shields.io/github/downloads/ImmoDevs/Trampoline-PM5/latest/total?sort=semver)](https://github.com/ImmoDevs/Trampoline-PM5/releases/tag/Pmmp5)

This is a PocketMine plugin that simulates a trampoline effect using slime blocks. When a player steps on a slime block, they will be propelled upwards with a configurable power. Additionally, a particle effect will be displayed at the player's position when they bounce on the trampoline.

## Features
- Trampoline effect using slime blocks
- Configurable trampoline power in `config.yml`
- Particle effect when bouncing on the trampoline

## Usage
1. Place slime blocks in the game world where you want the trampoline effect to occur.
2. Players will bounce when they step on the slime blocks, with the bounce power being configurable in the `config.yml` file.

## Configuration
The `config.yml` file allows you to customize the trampoline power:
```yaml
# Trampoline Plugin Configuration

# Set the power of your Trampoline here
# Recommended values: 0.5 (low) to 1.5 (high)
trampoline_power: 0.8

# Specify the block type that acts as the trampoline
# Use block identifiers like "slime_block"
trampoline_block: "slime_block"

# Enable or disable particle effects when bouncing
# true  - Particles are enabled
# false - Particles are disabled
slime_particle: true

# If you enjoy this plugin, please give it a star and provide feedback on GitHub:
# https://github.com/ImmoDevs/Trampoline-PM5
# If you encounter any issues, errors, or bugs, please report them in the Issues section on GitHub.
```
Adjust the `trampoline_power` value to change the strength of the trampoline effect.

## Events
- `PlayerMoveEvent`: Handles player movement and triggers the trampoline effect when a player steps on a slime block.
- `EntityDamageEvent`: Cancels fall damage for players, preventing them from taking fall damage when bouncing on the trampoline.

## Installation
1. Download this plugin in the new release or [Download Here](https://github.com/ImmoDevs/Trampoline-PM5/releases/download/Pmmp5/Trampoline-PM5.phar)
2. Place the plugin file in the PocketMine `plugins` directory.
3. Start or restart your PocketMine server.

## Credits
This plugin was created by ImmoDev.

For more information about PocketMine plugins, visit the [PocketMine website](https://doc.pmmp.io/en/rtfd/).
