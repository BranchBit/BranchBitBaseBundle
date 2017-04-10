git subsplit init https://github.com/BranchBit/BranchBitBaseBundle
git subsplit publish --heads="master" src/BBIT/DataGridBundle:git@github.com:BranchBit/DataGridBundle.git
git subsplit publish --heads="master" src/BBIT/DoctrineExtensions:git@github.com:BranchBit/DoctrineExtensions.git
git subsplit publish --heads="master" src/BBIT/SqsCommandQueueBundle:git@github.com:BranchBit/SqsCommandQueueBundle.git
git subsplit publish --heads="master" src/BBIT/AsyncDispatcherBundle:git@github.com:BranchBit/AsyncDispatcherBundle.git
#git subsplit publish --heads="master" src/BBIT/AdminBundle:git@github.com:BranchBit/AdminBundle.git
git subsplit publish --heads="master" src/BBIT/PageBundle:git@github.com:BranchBit/PageBundle.git
git subsplit publish --heads="master" src/BBIT/UserBundle:git@github.com:BranchBit/UserBundle.git
rm -rf .subsplit/
