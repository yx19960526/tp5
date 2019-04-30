git 常用命令 
	git commit -m 'XXXXXX' 带注释的提交 
	git branch  新建分支
	git checkout 选择分支
	git add   提交
	git add -a 提交所有
	git clone 从仓库检出项目
	git status  获取当前git工作的状态
	git diff  显示与仓库文件的不同
	git log 显示日志	
    git reflog	显示最近操作命令
	git reset --hard+版本号 回退版本	
git 步奏
	
	新建文件 进行编写
	1，git add 对应的文件名，
		git add -A 提交所有
	2. git commit -m '本次提交的解释写在这里'	
	
git 暂存区 stage
	git add 提交文件 就是提交到了暂存区，git跟踪的是文件的修改 add只会提交修改的部分,Git管理的是修改，当你用git add命令后，在工作区的第一次修改被放入暂存区，准备提交，但是，在工作区的第二次修改并没有放入暂存区，所以，git commit只负责把暂存区的修改提交了，也就是第一次的修改被提交了，第二次的修改不会被提交。
	git commit 提交文件 就是把文件从暂存区提交到了项目的代码库也就是分支 master
	
	git checkout -- 文件名 如果是乱修改了工作区，而没有修改缓存区 就是回到缓存区最近的版本
	