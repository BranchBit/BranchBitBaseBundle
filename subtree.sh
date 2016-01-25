git subsplit init https://github.com/BranchBit/BranchBitBaseBundle
git subsplit publish --heads="master" src/BBIT/DoctrineExtensions:git@github.com:BranchBit/DoctrineExtensions.git
git subsplit publish --heads="master" src/BBIT/SqsCommandQueueBundle:git@github.com:BranchBit/SqsCommandQueueBundle.git
git subsplit publish --heads="master" src/BBIT/AsyncDispatcherBundle:git@github.com:BranchBit/AsyncDispatcherBundle.git
rm -rf .subsplit/
