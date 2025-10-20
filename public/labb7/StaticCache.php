<?php
class StaticCache
{
    private static ?array $data = null;
    private static int $ts = 0;
    private const TTL = 600;

    public static function getData(): array
    {
        if (self::$data !== null && (time() - self::$ts) < self::TTL) {
            return self::$data;
        }
        $start = microtime(true);
        sleep(2);
        $list = [];
        for ($i = 0; $i < 10; $i++) {
            $list[] = [
                'code' => 'ITEM' . str_pad((string)$i, 3, '0', STR_PAD_LEFT),
                'price' => number_format(mt_rand(100, 10000) / 100, 2),
                'time' => date('c'),
            ];
        }
        self::$data = [
            'generated_at' => date('c'),
            'duration_sec' => number_format(microtime(true) - $start, 3),
            'items' => $list,
        ];
        self::$ts = time();
        return self::$data;
    }
}
