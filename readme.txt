git 常用命令 
	git commit -m 'XXXXXX' 带注释的提交 
	
	git add   提交
	git add -a 提交所有
	git clone 从仓库检出项目
	git status  获取当前git工作的状态
	git diff  显示与仓库文件的不同
	git log 显示日志	
    git reflog	显示最近操作命令
	git reset --hard+版本号 回退版本
	git rm +文件名 删除文件
	git push origin master 推送到对应的分支上
	git clone +项目url 检出项目
	master是主干道，分支就是正在修的路 修好了就可以合到主干道了
	
git 暂存命令
	git stash	暂存当前工作分支的内容
	git stash list  显示stash的所有内容
	git stash apply	恢复到工作区，并不会删除stash
	git stash pop	恢复stash同时删除stash

git feature
	如果要丢弃一个没有被合并过的分支，可以通过git branch -D <name>强行删除
	强制销毁不需要上传的分支
	git branch -D 分支名
			

git 步奏
	
	新建文件 进行编写
	1，git add 对应的文件名，
		git add -A 提交所有
	2. git commit -m '本次提交的解释写在这里'	
	
git 暂存区 stage
	git add 提交文件 就是提交到了暂存区，git跟踪的是文件的修改 add只会提交修改的部分,Git管理的是修改，当你用git add命令后，在工作区的第一次修改被放入暂存区，准备提交，但是，在工作区的第二次修改并没有放入暂存区，所以，git commit只负责把暂存区的修改提交了，也就是第一次的修改被提交了，第二次的修改不会被提交。
	git commit 提交文件 就是把文件从暂存区提交到了项目的代码库也就是分支 master
	
	git checkout -- 文件名 如果是乱修改了工作区，而没有修改缓存区 就是回到缓存区最近的版本
	
git 解决冲突
	git log --graph 查看git日志
git 分支
	git branch -d    +分支名 删除分支
	git checkout     +分支名 切换到某个分支
	git checkout -b  +分支名 创建并切换到某个分支
	git branch +name 新建分支s
	git merge + name 合并到某个分支
	git merge --no-ff -m "merge with no-ff" name 带合并提示和合并历史的分支
	git checkout -b dev origin/dev 拉取远程分支
	git push origin dev 上传到远程分支
	
git bug 
	保存之前的工作区，然后切到需要修复的分支，新建立一个分支，修复完成合并分支。
git 多人协作	
	git remote 查看远程仓库信息
	git remote -v 查看远程详细信息
	git push origin master 推送本地分支到master
	git push origin dev 推送到其他分支
	
	首先，可以试图用git push origin <branch-name>推送自己的修改；

	如果推送失败，则因为远程分支比你的本地更新，需要先用git pull试图合并；

	如果合并有冲突，则解决冲突，并在本地提交；

	没有冲突或者解决掉冲突后，再用git push origin <branch-name>推送就能成功！

	如果git pull提示no tracking information，则说明本地分支和远程分支的链接关系没有创建，用命令git branch --set-upstream-to <branch-name> origin/<branch-name>
	
	master分支是主分支，因此要时刻与远程同步；
	dev分支是开发分支，团队所有成员都需要在上面工作，所以也需要与远程同步；
	bug分支只用于在本地修复bug，就没必要推到远程了，除非老板要看看你每周到底修复了几个bug；
	feature分支是否推到远程，取决于你是否和你的小伙伴合作在上面开发。