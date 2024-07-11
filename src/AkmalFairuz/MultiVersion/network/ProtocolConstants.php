<?php

declare(strict_types=1);

namespace AkmalFairuz\MultiVersion\network;

use pocketmine\network\mcpe\protocol\ProtocolInfo;

class ProtocolConstants{

    public const BEDROCK_1_20_40 = 431;
    public const BEDROCK_1_20_50 = 440;
    public const BEDROCK_1_20_60 = 448;
    public const BEDROCK_1_20_70 = 465;
    public const BEDROCK_1_20_80 = 671;
    public const BEDROCK_1_21_0 = 685;

    public const MINECRAFT_VERSION = [
        self::BEDROCK_1_16_220 => "1.16.220",
        self::BEDROCK_1_17_0 => "1.17.0",
        self::BEDROCK_1_17_10 => "1.17.10",
        self::BEDROCK_1_17_30 => "1.17.30",
        self::BEDROCK_1_17_40 => "1.17.40",
        self::BEDROCK_1_18_0 => "1.18.0",
        ProtocolInfo::CURRENT_PROTOCOL => ProtocolInfo::MINECRAFT_VERSION_NETWORK
    ];

    public const SUPPORTED_PROTOCOLS = [
        self::BEDROCK_1_16_220,
        self::BEDROCK_1_17_0,
        self::BEDROCK_1_17_10,
        self::BEDROCK_1_17_30,
        self::BEDROCK_1_17_40,
        self::BEDROCK_1_18_0,
        ProtocolInfo::CURRENT_PROTOCOL
    ];
}
