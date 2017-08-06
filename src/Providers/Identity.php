<?php

namespace Matriphe\Manekin\Providers;

use DateTime;
use Faker\Provider\Base;

class Identity extends Base
{
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';

    protected static $nikMale = '{{cityCode}}{{districtCode}}{{birthdateMale}}####';

    protected static $nikFemale = '{{cityCode}}{{districtCode}}{{birthdateFemale}}####';

    protected static $sim = '{{birthdateSim}}######';

    protected static $passport = array(
        '?#######', '?######',
    );

    protected static $cityCode = array(
        1101, 1102, 1103, 1104, 1105, 1106, 1107, 1108, 1109, 1110, 1111, 1112,
        1113, 1114, 1115, 1116, 1117, 1118, 1171, 1172, 1173, 1174, 1175, 1201,
        1202, 1203, 1204, 1205, 1206, 1207, 1208, 1209, 1210, 1211, 1212, 1213,
        1214, 1215, 1216, 1217, 1218, 1219, 1220, 1221, 1222, 1223, 1224, 1225,
        1271, 1272, 1273, 1274, 1275, 1276, 1277, 1278, 1301, 1302, 1303, 1304,
        1305, 1306, 1307, 1308, 1309, 1310, 1311, 1312, 1371, 1372, 1373, 1374,
        1375, 1376, 1377, 1401, 1402, 1403, 1404, 1405, 1406, 1407, 1408, 1409,
        1410, 1471, 1473, 1501, 1502, 1503, 1504, 1505, 1506, 1507, 1508, 1509,
        1571, 1572, 1601, 1602, 1603, 1604, 1605, 1606, 1607, 1608, 1609, 1610,
        1611, 1671, 1672, 1673, 1674, 1701, 1702, 1703, 1704, 1705, 1706, 1707,
        1708, 1709, 1771, 1801, 1802, 1803, 1804, 1805, 1806, 1807, 1808, 1809,
        1810, 1811, 1812, 1813, 1871, 1872, 1901, 1902, 1903, 1904, 1905, 1906,
        1971, 2101, 2102, 2103, 2104, 2105, 2171, 2172, 3101, 3171, 3172, 3173,
        3174, 3175, 3201, 3202, 3203, 3204, 3205, 3206, 3207, 3208, 3209, 3210,
        3211, 3212, 3213, 3214, 3215, 3216, 3217, 3218, 3271, 3272, 3273, 3274,
        3275, 3276, 3277, 3278, 3279, 3301, 3302, 3303, 3304, 3305, 3306, 3307,
        3308, 3309, 3310, 3311, 3312, 3313, 3314, 3315, 3316, 3317, 3318, 3319,
        3320, 3321, 3322, 3323, 3324, 3325, 3326, 3327, 3328, 3329, 3371, 3372,
        3373, 3374, 3375, 3376, 3401, 3402, 3403, 3404, 3471, 3501, 3502, 3503,
        3504, 3505, 3506, 3507, 3508, 3509, 3510, 3511, 3512, 3513, 3514, 3515,
        3516, 3517, 3518, 3519, 3520, 3521, 3522, 3523, 3524, 3525, 3526, 3527,
        3528, 3529, 3571, 3572, 3573, 3574, 3575, 3576, 3577, 3578, 3579, 3601,
        3602, 3603, 3604, 3671, 3672, 3673, 3674, 5101, 5102, 5103, 5104, 5105,
        5106, 5107, 5108, 5171, 5201, 5202, 5203, 5204, 5205, 5206, 5207, 5208,
        5271, 5272, 5301, 5302, 5303, 5304, 5305, 5306, 5307, 5308, 5309, 5310,
        5311, 5312, 5313, 5314, 5315, 5316, 5317, 5318, 5319, 5320, 5371, 6101,
        6102, 6103, 6104, 6105, 6106, 6107, 6108, 6109, 6110, 6111, 6112, 6171,
        6172, 6201, 6202, 6203, 6204, 6205, 6206, 6207, 6208, 6209, 6210, 6211,
        6212, 6213, 6271, 6301, 6302, 6303, 6304, 6305, 6306, 6307, 6308, 6309,
        6310, 6311, 6371, 6372, 6401, 6402, 6403, 6404, 6405, 6409, 6471, 6472,
        6474, 6501, 6502, 6503, 6504, 6571, 7101, 7102, 7103, 7104, 7105, 7106,
        7107, 7108, 7109, 7110, 7111, 7171, 7172, 7173, 7174, 7201, 7202, 7203,
        7204, 7205, 7206, 7207, 7208, 7209, 7210, 7271, 7301, 7302, 7303, 7304,
        7305, 7306, 7307, 7308, 7309, 7310, 7311, 7312, 7313, 7314, 7315, 7316,
        7317, 7318, 7322, 7325, 7326, 7371, 7372, 7373, 7401, 7402, 7403, 7404,
        7405, 7406, 7407, 7408, 7409, 7410, 7471, 7472, 7501, 7502, 7503, 7504,
        7505, 7571, 7601, 7602, 7603, 7604, 7605, 8101, 8102, 8103, 8104, 8105,
        8106, 8107, 8108, 8109, 8171, 8172, 8201, 8202, 8203, 8204, 8205, 8206,
        8207, 8271, 8272, 9101, 9102, 9103, 9104, 9105, 9106, 9107, 9108, 9109,
        9110, 9171, 9401, 9402, 9403, 9404, 9408, 9409, 9410, 9411, 9412, 9413,
        9414, 9415, 9416, 9417, 9418, 9419, 9420, 9426, 9427, 9428, 9429, 9430,
        9431, 9432, 9433, 9434, 9435, 9436, 9471,
    );

    public static function cityCode()
    {
        return static::randomElement(static::$cityCode);
    }

    public static function districtCode()
    {
        return sprintf("%'.02d", mt_rand(1, 40));
    }

    public static function birthdateMale()
    {
        return static::birthdateNik(static::GENDER_MALE);
    }

    public static function birthdateFemale()
    {
        return static::birthdateNik(static::GENDER_FEMALE);
    }

    public static function birthdateSim()
    {
        return static::getRandomBirthDate()->format('ymd');
    }

    public function nik($gender = null)
    {
        if (empty($gender)) {
            $gender = static::randomElement(array(static::GENDER_MALE, static::GENDER_FEMALE));
        }

        if ($gender === static::GENDER_FEMALE) {
            return static::numerify($this->generator->parse(static::$nikFemale));
        }

        return static::numerify($this->generator->parse(static::$nikMale));
    }

    public function sim()
    {
        return static::numerify($this->generator->parse(static::$sim));
    }

    public function passport()
    {
        return strtoupper(static::bothify($this->generator->parse(static::randomElement(static::$passport))));
    }

    protected static function birthdateNik($gender)
    {
        $birthdate = (int) static::getRandomBirthDate()->format('dmy');

        if ($gender === static::GENDER_FEMALE) {
            $birthdate += 400000;
        }

        return sprintf("%'.06d", $birthdate);
    }

    private static function getRandomBirthDate()
    {
        $timestamp = mt_rand(strtotime('-100 years'), strtotime('now'));

        return new DateTime('@'.$timestamp);
    }
}
