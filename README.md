# コメント通知

## 概要

データベース等のエントリにコメントがついた場合に、エントリの作者に通知が飛ぶようにするための、Moodleのローカルプラグインです。

## 実装完了した機能

- コメント投稿時の通知（Moodle上、日本語と英語）
- データベース、用語集、課題に対するコメントの通知機能
- 設定画面の追加（データベース・用語集・課題のコメントを通知するか否か、サイト全体として制御可能）

## 未実装・未実施の機能

- エントリの作者だけでなく、コメント作者にも通知が飛ぶようにする（この機能はON/OFF選択可能にする）
    - 処理が非常に面倒になりそうなので、作業の優先順位低
- 通知発信までの猶予を（5分程度、決め打ちで）設ける
- 連続投稿された場合に、一定時間は通知が飛ばないようにする
- wiki、問題バンクのコメントなど、その他のmessageに対する通知

## 機能追加等について

少なくとも自分自身が元々実施したかった機能（教師がデータベースエントリにコメントをつけると、投稿した学生に通知される）は実装できてしまっているため、追加に関してはかなりスローペースになります。

## 余談

元々は「データベースモジュールの」エントリのみで考えていましたが、結果的に mdl_commentsの内容を拾って通知、という部分まで手を広げています。「データベースモジュールの」という意味でdb_com_という名前にしましたが、「Moodleデータベースの中のcommentsテーブルに対するNotification」とも考えられる名称なので、開発開始時の名前をそのまま使っています。



# Comment Notifications

## Description

A local plugin for Moodle to notify the author of an entry when a comment is made on a database or other entry.

## Features implemented

- Notification when comments are posted (on Moodle, in Japanese and English).
- Notification function for comments on databases, glossaries and comments for assignment submissions.
- Addition of a settings screen (site-wide control of whether comments on databases, glossaries, and assignments are notified or not).

## Not implemented/not yet implemented feature

- Make it so that notifications are sent not only to the author of the entry but also to the comment author (this feature should be selectable ON/OFF).
    - This is a low priority task because the process is likely to be very cumbersome.
- Allow a grace period (5 minutes or so, to be determined) before a notification is sent out.
- When a series of posts are made, make it so that notifications will not be sent out for a certain period of time.
- Notification for other messages such as wiki, comments on question bank, etc.


## Additions to functionality, etc.

Since I have already implemented at least the feature I originally wanted to implement (teachers commenting on database entries are notified to the students who posted them), the pace of additions will be quite slow.


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
