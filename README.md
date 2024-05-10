# Trampoline Plugin

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
trampoline_power: 0.8
```
Adjust the `trampoline_power` value to change the strength of the trampoline effect.

## Events
- `PlayerMoveEvent`: Handles player movement and triggers the trampoline effect when a player steps on a slime block.
- `EntityDamageEvent`: Cancels fall damage for players, preventing them from taking fall damage when bouncing on the trampoline.

## Installation
1. Place the plugin file in the PocketMine `plugins` directory.
2. Start or restart your PocketMine server.

## Credits
This plugin was created by ImmoDev.

For more information about PocketMine plugins, visit the [PocketMine website](https://doc.pmmp.io/en/rtfd/).
