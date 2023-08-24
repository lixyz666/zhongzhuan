<?php
        $hitokoto = array(
            "满天都是星星，好像一场冻结了的大雨。",
            "我不是我，我就是我，你不是你，你就是你，啊哈哈哈哈。",
            "遇见了你，CSGO都卡的不行。",
            "CSGO，你个鸡巴。",
            "真传奇真回收！小怪也能爆满地神装。",
            "一场长达4年的梦醒了。",
            "怎么还有杀鸡之最。",
            "好怀念那时候的我们啊，说说笑笑，吵吵闹闹，那时候你在柏林，我在莫斯科。",
            "你个颠佬。",
            "“所有人其实就是一个整体，别人的不幸就是你的不幸，不要以为丧钟为谁而鸣，丧钟就是为你而鸣”。",
            "I'm so mother fucking tired。",
            "一点都不滚石的滚石，跳脱的旋律像是真正的彩虹。"
        );
        $randomIndex = array_rand($hitokoto);
        $randomHitokoto = $hitokoto[$randomIndex];
        echo $randomHitokoto;
        ?>