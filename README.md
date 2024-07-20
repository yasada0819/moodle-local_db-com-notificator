# データベースコメント通知

## 概要

データベース等のエントリにコメントがついた場合に、エントリの作者に通知が飛ぶようにするための、Moodleのローカルプラグインです。

## 実装完了した機能

- コメント投稿時の通知（Moodle上、日本語と英語）
- 用語集、課題に対するコメントの通知機能
- 設定画面の追加（データベース・課題・用語集のコメントを通知するか否か、サイト全体として制御可能）


## 未実装・未実施の機能

- インストール時またはインストール後に自動で全ユーザの通知をONにする
- エントリの作者だけでなく、コメント作者にも通知が飛ぶようにする（この機能はON/OFF選択可能にする）
    - 処理が非常に面倒になりそうなので、作業の優先順位低
- 通知発信までの猶予を（5分程度、決め打ちで）設ける
- 連続投稿された場合に、一定時間は通知が飛ばないようにする


## 余談

元々は「データベースモジュールの」エントリのみで考えていましたが、結果的に mdl_commentsの内容を拾って通知、という部分まで手を広げています。「データベースモジュールの」という意味でdb_com_という名前にしましたが、「Moodleデータベースの中のcommentsテーブルに対するNotification」とも考えられる名称なので、開発開始時の名前をそのまま使っています。


# Database Comment Notifications

## Description
This Moodle plugin notifies users when their database entry receives a new comment.

## Installation
1. Place the `local_db_com_notificator` folder in the `local` directory of your Moodle installation.
2. Visit the Notifications page to complete the installation.

## Usage
Once installed, the plugin will automatically notify users when their database entries receive new comments.

## Author
- Name: Yoshikazu Asada
- Email: yasada@jichi.ac.jp
- Website: [Github yasada0819](https://github.com/yasada0819/moodle-local_db-com-notificator)

## License
This plugin is licensed under the [GNU General Public License](https://www.gnu.org/licenses/gpl-3.0.html).
