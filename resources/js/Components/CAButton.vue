<script setup>

</script>

<template>
    <button class="btn btn-aftaer">
        <slot></slot>
    </button>
</template>

<style scoped>
    .btn {
        position: relative;
        z-index: 1; /* ボタン本体のスタック順 */
        padding: 5px 20px;
        border-radius: 5px;
        border: 1px solid rgba(0, 0, 200, 0.3);
        background-color: rgba(0, 0, 255, 0.3); /* 背景色 */
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0 3px 5px rgba(0, 0, 0, 0.3);
        transition: all 0.1s
    }

    .btn:hover {
        /* margin-top: 2px; */
        transform: translateY(2px);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2); /* シャドウも少し弱める */
    }

    .btn:active {
        background-color: rgba(0, 0, 200, 0.6); /* クリック時に色を濃く */
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); /* クリック時にシャドウを弱く */
        transform: translateY(2px); /* クリック時の押し込み効果 */
    }

    .btn::after {
        content: '';
        display: block;
        z-index: 2;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 3px;
        left: 0;
        border-radius: 5px;
        border-bottom: 3px solid rgba(0, 0, 128, 0.5); /* 初期状態のボーダー */
        transition: border-bottom 2s ease top 5s; /* スムーズな変化 */
    }

    .btn:hover::after {
        top: 2px;
        border-bottom: 1px solid rgba(0, 0, 128, 0.5); 
    }
</style>