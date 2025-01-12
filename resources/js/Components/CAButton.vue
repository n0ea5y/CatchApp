<script setup>
    const props = defineProps({
        type: {
            type: String,
            default: 'primary',
        }
    });
    console.log(props.type);

    const items = {
            'insert': 'bg-yellow-200',
            'update': 'bg-green-200',
            'delete': 'bg-red-200',
            'primary': 'bg-blue-200',
        };
    
</script>

<template>
    <button class="btn btn-aftaer" :class="items[type]">
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
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0 3px 5px rgba(0, 0, 0, 0.3);
        transition: all 0.1s
    }

    .btn:hover {
        transform: translateY(2px);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2); /* シャドウも少し弱める */
    }

    .btn:active {
        filter: brightness(0.8); /* 明るさを変更してクリック感を出す */
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
        border-bottom: 3px solid rgba(0, 0, 0, 0.5); 
        transition: border-bottom 2s ease top 5s; /* スムーズな変化 */
    }

    .btn:hover::after {
        top: 2px;
        border-bottom: 1px solid rgba(0, 0, 128, 0.5); 
    }
</style>