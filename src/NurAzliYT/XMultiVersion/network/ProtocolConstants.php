<?php

declare(strict_types=1);

namespace NurAzliYT\XMultiVersion\network;

use pocketmine\network\mcpe\protocol\ProtocolInfo;

class ProtocolConstants{

    public const BEDROCK_1_20_40 = 622;
    public const BEDROCK_1_20_50 = 630;
    public const BEDROCK_1_20_60 = 649;
    public const BEDROCK_1_20_70 = 662;
    public const BEDROCK_1_20_80 = 671;
    public const BEDROCK_1_21_0 = 685;

    public const MINECRAFT_VERSION = [
        self::BEDROCK_1_20_40 => "1.20.40",
        self::BEDROCK_1_20_50 => "1.20.50",
        self::BEDROCK_1_20_60 => "1.20.60",
        self::BEDROCK_1_20_70 => "1.20.70",
        self::BEDROCK_1_20_80 => "1.20.80",
        self::BEDROCK_1_21_0 => "1.21.0",
        ProtocolInfo::CURRENT_PROTOCOL => ProtocolInfo::MINECRAFT_VERSION_NETWORK
    ];

    public const SUPPORTED_PROTOCOLS = [
        self::BEDROCK_1_20_40,
        self::BEDROCK_1_20_50,
        self::BEDROCK_1_20_60,
        self::BEDROCK_1_20_70,
        self::BEDROCK_1_20_80,
        self::BEDROCK_1_21_0,
        ProtocolInfo::CURRENT_PROTOCOL
    ];
}
