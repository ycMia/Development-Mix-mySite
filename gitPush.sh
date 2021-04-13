#!/bin/bash
echo -n "Enter what to commit: "
read commition
echo -n "Enter which remote & branch to push (e.g. github master): "
read remote
git add .
echo ""
echo ""
git commit -m "$commition"
echo ""
echo ""
git push $remote
echo ""
echo ""
echo "completed";
