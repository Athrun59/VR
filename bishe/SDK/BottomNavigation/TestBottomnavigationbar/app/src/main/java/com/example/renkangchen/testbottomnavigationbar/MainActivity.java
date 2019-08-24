package com.example.renkangchen.testbottomnavigationbar;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentTransaction;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;

import com.ashokvarma.bottomnavigation.BottomNavigationBar;
import com.ashokvarma.bottomnavigation.BottomNavigationItem;
public class MainActivity extends AppCompatActivity implements BottomNavigationBar.OnTabSelectedListener {
    private static final String TAG = "MainActivity";
    private FragmentA fragmenta;
    private FragmentB fragmentb;
    private FragmentC fragmentc;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        BottomNavigationBar bottomNavigationBar = (BottomNavigationBar) findViewById(R.id.bottom_navigation_bar);
        bottomNavigationBar.setMode(BottomNavigationBar.MODE_FIXED);
        bottomNavigationBar.setBackgroundStyle(BottomNavigationBar.BACKGROUND_STYLE_STATIC);

        bottomNavigationBar
                .addItem(new BottomNavigationItem(R.drawable.ic_folder_open_grey600_36dp, "A")).setActiveColor(R.color.colorPrimary)
                .addItem(new BottomNavigationItem(R.drawable.ic_language_grey600_36dp, "B"))
                .addItem(new BottomNavigationItem(R.drawable.ic_info_outline_grey600_36dp, "C"))
                .setFirstSelectedPosition(0)
                .initialise();
        setDefaultFragment();
        bottomNavigationBar.setTabSelectedListener(this);
    }
    private void setDefaultFragment() {
        FragmentManager fm = getSupportFragmentManager();
        FragmentTransaction transaction = fm.beginTransaction();
        fragmenta = FragmentA.newInstance("fragment a here");
        transaction.replace(R.id.fragment_content, fragmenta);
        transaction.commit();
    }


    @Override
    public void onTabUnselected(int position) {
        Log.d(TAG, "onTabUnselected() called with: " + "position = [" + position + "]");
    }
    @Override
    public void onTabReselected(int position) {

    }
    @Override
    public void onTabSelected(int position) {
        Log.d(TAG, "onTabSelected() called with: " + "position = [" + position + "]");
        FragmentManager fm = this.getSupportFragmentManager();
        //begin
        FragmentTransaction transaction = fm.beginTransaction();
        hideFragment(transaction);

        switch (position) {
            case 0:
                if (fragmenta == null) {
                    fragmenta = FragmentA.newInstance("fragment a here");
                    transaction.add(R.id.fragment_content, fragmenta);
                } else{
                    transaction.show(fragmenta);
                }break;
            case 1:
                if (fragmentb == null) {
                    fragmentb = FragmentB.newInstance("fragment b here");
                    transaction.add(R.id.fragment_content,fragmentb);
                } else{
                    transaction.show(fragmentb);
                }break;
            case 2:
                if (fragmentc == null) {
                    fragmentc = FragmentC.newInstance("fragment c here");
                    transaction.add(R.id.fragment_content, fragmentc);
                }else{
                    transaction.show(fragmentc);
                }break;
            default:
                break;
        }
        //end
        transaction.commit();
    }

    private void hideFragment(FragmentTransaction transaction) {
        if (fragmenta != null) {
            transaction.hide(fragmenta);
        }
        if (fragmentb != null) {
            transaction.hide(fragmentb);
        }
        if (fragmentc != null) {
            transaction.hide(fragmentc);
        }
    }

}