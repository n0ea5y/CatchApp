import axios from "axios";
import { successToast, errorToast } from "./Toast";

export function formPost(url, data, message, redirect = false, func) {
    axios.post(url, data)
        .then(response => {
            if(!redirect) successToast(message); 
            return func(response.data);
        })
        .catch(error => {
            // エラー時の処理
            // 最初のエラーメッセージを取得
        const firstError = Object.values(error.response.data.errors)
            .flat() // 全てのエラーメッセージを1つの配列にまとめる
            .shift(); // 最初の要素を取得
            errorToast(firstError); 
            return func(error);
        });
}