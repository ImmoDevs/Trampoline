# Trampoline-PM5

[![Trampoline-PM5](https://img.shields.io/badge/Trampoline_PM5-v2.0.0-brightgreen.svg)](https://github.com/ImmoDevs/Trampoline-PM5)
[![LICENSE](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![VERSION](https://img.shields.io/badge/version-2.0.0-green.svg)](https://semver.org)
[![DOWNLOAD](https://img.shields.io/github/downloads/ImmoDevs/Trampoline-PM5/latest/total?sort=semver)](https://github.com/ImmoDevs/Trampoline-PM5/releases/tag/v2.0.0)

## Overview

Trampoline-PM5 is a powerful and configurable plugin for PocketMine-MP, a Minecraft server software. This plugin introduces a fun and interactive trampoline effect using slime blocks, enhancing the gameplay experience by allowing players to bounce high into the air when they step on specific blocks. It's a great addition for servers that want to add unique and entertaining features for their players.

**Important Note:** This plugin forcefully disables fall damage for the entire server to ensure players do not get hurt while using the trampolines.

## Why Use Trampoline-PM5?

- **Enhanced Gameplay**: Adds a dynamic and engaging element to your server, making it more fun for players.
- **Configurable**: Allows server administrators to customize the trampoline's power and appearance through simple configuration settings.
- **Visual Effects**: Optionally includes particle effects to make the trampoline effect visually appealing.
- **Safety**: Automatically cancels fall damage when players land on the trampoline block, ensuring a safe and enjoyable experience.

## Features

- **Trampoline Effect**: Players bounce high when they step on slime blocks.
- **Configurable Power**: The bounce strength can be adjusted to fit your server's needs.
- **Particle Effects**: Optional particle effects enhance the visual experience.
- **Fall Damage Prevention**: Prevents players from taking fall damage when landing on the trampoline block.

## Installation

1. **Download**: Obtain the latest version of the plugin from the [GitHub Releases](https://github.com/ImmoDevs/Trampoline-PM5/releases) page.
2. **Install**: Place the plugin file into the `plugins` directory of your PocketMine-MP server.
3. **Activate**: Restart the server to enable the plugin.

## Configuration

The `config.yml` file allows you to customize various aspects of the plugin. Below is an example of the configuration options:

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

## Usage

1. **Setup**: Place slime blocks in your game world where you want the trampoline effect to occur.
2. **Experience**: Players will bounce when they step on the slime blocks. The bounce height is adjustable via the `trampoline_power` setting in `config.yml`.

## Events

- **PlayerMoveEvent**: Detects player movement and triggers the trampoline effect.
- **EntityDamageEvent**: Cancels fall damage to prevent injury when landing on the trampoline.

## Example

Imagine setting up a fun parkour course where players need to bounce between platforms using the trampoline effect, or creating a whimsical area where players can enjoy the thrill of bouncing high into the sky. This plugin makes such creative gameplay scenarios possible.

## Credits

This plugin was developed by ImmoDev. We appreciate your support and feedback. If you enjoy using Trampoline-PM5, please consider giving it a star on GitHub and providing feedback or reporting any issues you encounter.

For more information about PocketMine plugins, visit the [PocketMine website](https://doc.pmmp.io/en/rtfd/)
