package com.example.renkangchen.testbottomnavigationbar;

import android.support.v4.app.Fragment;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;
/**
 * Created by renkangchen on 17-5-29.
 */

public class FragmentC extends Fragment {
    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.fragment_c, container, false);
        return view;
    }

    @Override
    public void onActivityCreated(@Nullable Bundle savedInstanceState) {
        super.onActivityCreated(savedInstanceState);
        TextView tv = (TextView) getActivity().findViewById(R.id.text_c);
        tv.setText(getArguments().getString("ARGS"));
    }

    public static FragmentC newInstance(String content) {
        Bundle args = new Bundle();
        args.putString("ARGS", content);
        FragmentC fragment = new FragmentC();
        fragment.setArguments(args);
        return fragment;
    }
}
