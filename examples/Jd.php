<?php

use Wangsijia\Tbk\Jd\JdClient;
use Wangsijia\Tbk\Jd\request\UnionOpenGoodsJingfenQueryRequest;

class Jd
{
    public function getJingFenGoods()
    {
        $c = new JdClient();
        $c->appKey = "44ee4e9e14cc2728cb0daeb1476a0f7c";
        $c->appSecret = "147a109400684593be57352cdf1c922d";
        $req = new UnionOpenGoodsJingfenQueryRequest();
        $goodsReq = [
            "eliteId" => 1,
            "pageIndex" => 1,
            "pageSize" => 20
        ];
        $req->setGoodsReq(json_decode($goodsReq));
        $resp = $c->execute($req);
        print(json_encode($resp));
    }
}
