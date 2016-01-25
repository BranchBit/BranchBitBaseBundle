git subsplit init https://github.com/BranchBit/BranchBitBaseBundle
git subsplit publish --heads="master" src/BBIT/DoctrineExtensions:git@github.com:BranchBit/DoctrineExtensions.git
git subsplit publish --heads="master" src/BBIT/SqsCommandQueueBundle:git@github.com:BranchBit/SqsCommandQueueBundle.git
rm -rf .subsplit/
